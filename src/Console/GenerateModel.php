<?php

namespace CNSDose\Salesforce\Console;

use CNSDose\Salesforce\Models\BaseModel;
use GuzzleHttp\Client;
use Illuminate\Console\Command;

class GenerateModel extends Command
{

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'salesforce:generate-model';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate Salesforce model dynamically from API';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'salesforce:generate-model {--N|namespace=} {--P|package=} {--C|class=} {--A|all-fields} {object}';

    protected $typeRules = [
        'id' => ['string', null],
        'reference' => ['string', null],
        'boolean' => ['bool', 'bool'],
        'string' => ['string', null],
        'textarea' => ['string', null],
        'date' => ['\\Carbon\\Carbon', 'date'],
        'datetime' => ['\\Carbon\\Carbon', 'datetime'],
        'time' => ['\\Carbon\\Carbon', 'time'],
        'double' => ['float', 'number:%s,%s'],
        'currency' => ['float', 'number:%s,%s'],
    ];

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $namespace = $this->option('namespace');
        $package = $this->option('package') ?: $namespace;
        $object = $this->argument('object');
        $class = $this->option('class') ?: $object;

        $accessToken = BaseModel::getAccessToken();
        $client = new Client();
        $response = $client->get(
            sprintf(
                'https://ap8.salesforce.com/services/data/%s/sobjects/%s/describe/',
                config('salesforce.api_version'),
                $object
            ), [
                'headers' => [
                    'Authorization' => 'Bearer ' . $accessToken,
                ],
                'http_errors' => false,
            ]
        );
        $metas = json_decode($response->getBody()->getContents(), true);

        $properties = '';
        $defaultFields = '';
        foreach ($metas['fields'] as $field) {
            $fieldType = $field['type'];
            $fieldName = $field['name'];
            if (!$this->option('all-fields') && substr($fieldName, strlen($fieldName) - 3) === '__c') {
                continue;
            }
            list($phpType, $rule) = $this->typeRules[$fieldType] ?? ['mixed', null];
            $properties .= sprintf(
                "\n * @property %s %s",
                $phpType,
                $fieldName
            );
            if ($fieldType === 'double' || $fieldType === 'currency') {
                $defaultFields .= sprintf(
                    "\n        '%s' => '%s',",
                    $fieldName,
                    sprintf($rule, $field['precision'] - $field['scale'], $field['scale'])
                );
            } else {
                $defaultFields .= sprintf(
                    "\n        '%s' => %s,",
                    $fieldName,
                    $rule === null ? 'null' : "'$rule'"
                );
            }
        }

        $result = sprintf(<<<EOF
<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace %s;

use CNSDose\Salesforce\Models\BaseModel;

/**
 * Class %s
 * @package %s
 *
 * @method %s[] query()
 *%s
 */
class %s extends BaseModel
{
    protected static \$objectApiName = '%s';
    protected \$defaultFields = [%s
    ];
}
EOF
            , $namespace, $class, $package, $class, $properties, $class, $object, $defaultFields);

        $this->line($result);

    }
}

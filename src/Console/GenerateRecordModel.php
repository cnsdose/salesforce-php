<?php

namespace CNSDose\Salesforce\Console;

use CNSDose\Salesforce\Support\Authentication;
use GuzzleHttp\Client;
use Illuminate\Console\Command;

class GenerateRecordModel extends Command
{

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'salesforce:generate-record-model';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate Salesforce record model dynamically from API';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'salesforce:generate-record-model {--N|namespace=} {--package=} {--C|class=} {--T|token=} {--A|all-fields} {object}';

    protected static $typeRules = [
        'id' => ['string', null],
        'reference' => ['string', null],
        'boolean' => ['bool', 'bool'],
        'string' => ['string', null],
        'textarea' => ['string', null],
        'date' => ['\\Carbon\\Carbon', 'date'],
        'datetime' => ['\\Carbon\\Carbon', 'datetime'],
        'time' => ['\\Carbon\\Carbon', 'time'],
    ];

    protected static function loadLambdaRules()
    {
        self::$typeRules['double'] = ['float', function ($field) {
            return sprintf(
                "\n        '%s' => '%s',",
                $field['name'],
                sprintf('number:%s,%s', $field['precision'] - $field['scale'], $field['scale'])
            );
        }];
        self::$typeRules['currency'] = self::$typeRules['double'];
    }

    /**
     * @param string $fieldType
     * @param string $phpType
     * @param null|string|object $rule
     */
    public static function addTypeRule(string $fieldType, string $phpType, $rule)
    {
        self::$typeRules[$fieldType] = [$phpType, $rule];
    }

    /**
     * Execute the console command.
     *
     * @return int
     * @throws \CNSDose\Standards\Exceptions\StandardException
     */
    public function handle()
    {
        self::loadLambdaRules();

        $namespace = $this->option('namespace');
        $package = $this->option('package') ?: $namespace;
        $object = $this->argument('object');
        $class = $this->option('class') ?: $object;

        $accessToken = $this->option('token') ?: Authentication::getAccessToken();
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
        if ($response->getStatusCode() !== 200) {
            fwrite(STDERR, sprintf("Object %s not found!\n", $object));
            return 1;
        }
        $metas = json_decode($response->getBody()->getContents(), true);

        $properties = '';
        $defaultFields = '';
        foreach ($metas['fields'] as $field) {
            $fieldType = $field['type'];
            $fieldName = $field['name'];
            if (!$this->option('all-fields') && substr($fieldName, strlen($fieldName) - 3) === '__c') {
                continue;
            }
            list($phpType, $rule) = self::$typeRules[$fieldType] ?? ['mixed', null];
            $properties .= sprintf(
                "\n * @property %s \$%s",
                $phpType,
                $fieldName
            );
            if (is_object($rule)) {
                $defaultFields .= $rule($field);
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

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class %s
 * @package %s
 *
 * @method %s[] query()
 *%s
 */
class %s extends BaseRecordModel
{
    protected static \$objectApiName = '%s';
    protected \$defaultFields = [%s
    ];
}
EOF
            , $namespace, $class, $package, $class, $properties, $class, $object, $defaultFields);

        $this->line($result);
        return 0;
    }
}

<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 18/02/19
 * Time: 2:41 PM
 */

namespace CNSDose\Salesforce\Console;

use CNSDose\Salesforce\Models\BaseMetadataModel;
use Illuminate\Console\Command;

class GenerateMetadataModel extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'salesforce:generate-metadata-model';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate Salesforce metadata models dynamically from WSDL';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'salesforce:generate-metadata-model {--N|namespace=} {--package=} {--path=}';

    private $complexTypes = [];
    private $enums = [];

    private $namespace, $package, $path, $wsdlPath;

    public function handle()
    {
        $this->namespace = $this->option('namespace');
        $this->package = $this->option('package') ?: $this->namespace;
        if (empty($this->namespace) || empty($this->package)) {
            empty($this->namespace) && $this->error('Namespace is not given!');
            empty($this->package) && $this->error('Package is not given!');
            return 1;
        }
        $this->path = $this->option('path') ?: __DIR__ . '/../Models/Metadata';
        $this->wsdlPath = config('salesforce.metadata_wsdl') ?: __DIR__ . '/../../wsdl/metadata.wsdl.xml';

        $this->parseWsdl();
        foreach (array_keys($this->complexTypes) as $type) {
            $this->generateComplexModel($type);
        }
        foreach (array_keys($this->enums) as $type) {
            $this->generateEnumModel($type);
        }
        return 0;
    }

    private function parseWsdl()
    {
        $typeMapping = [
            'xsd:anyType' => 'mixed',
            'xsd:string' => 'string',
            'xsd:boolean' => 'bool',
            'xsd:int' => 'int',
            'xsd:float' => 'float',
            'xsd:double' => 'float',
            'xsd:date' => 'string',
            'xsd:time' => 'string',
            'xsd:dateTime' => 'string',
            'xsd:base64Binary' => 'string',
        ];
        $reader = new \XMLReader();
        $reader->open($this->wsdlPath);
        while ($reader->read() && $reader->name !== 'types') ;
        while ($reader->read() && $reader->name !== 'types') {
            if ($reader->name === 'xsd:element') $lastElementName = $reader->getAttribute('name');
            if ($reader->name !== 'xsd:simpleType' && $reader->name !== 'xsd:complexType') continue;
            $modelName = $reader->getAttribute('name') ?: $lastElementName;
            $modelName = ucfirst($modelName);
            if (array_key_exists($modelName, $this->complexTypes) || array_key_exists($modelName, $this->enums)) continue;
            $type = $reader->name;

            if ($type === 'xsd:simpleType') {
                // enum
                $variants = [];
                while ($reader->read() && $reader->name !== $type) {
                    if ($reader->name === 'xsd:enumeration') {
                        $variants[] = $reader->getAttribute('value');
                    }
                }
                if (!empty($variants)) {
                    $this->enums[$modelName] = array_values(array_unique($variants));
                }
            } elseif ($type === 'xsd:complexType') {
                $fields = [];
                $base = null;
                while ($reader->read() && $reader->name !== 'xsd:element' && $reader->name !== $type) {
                    if ($reader->name === 'xsd:extension') {
                        $base = substr($reader->getAttribute('base'), 4);
                    }
                }
                while ($reader->name === 'xsd:element' && $reader->name !== $type) {
                    $attrName = $reader->getAttribute('name');
                    $attrMultiple = $reader->getAttribute('maxOccurs') !== null;
                    $attrType = $reader->getAttribute('type');
                    if (strpos($attrType, 'tns:') === 0) {
                        $attrType = substr($attrType, 4);
                        if ($attrType === 'ID') {
                            $attrType = 'string';
                        }
                        $fields[$attrName] = [
                            'multiple' => $attrMultiple,
                            'name' => $attrName,
                            'type' => $attrType,
                        ];
                    } else {
                        $fields[$attrName] = [
                            'multiple' => $attrMultiple,
                            'name' => $attrName,
                            'type' => $typeMapping[$attrType] ?? 'mixed',
                        ];
                    }
                    $reader->next();
                    $reader->next();
                }
                $this->complexTypes[$modelName] = [
                    'base' => $base,
                    'fields' => $fields,
                ];
            }
        }

        $reader->close();
    }

    private function generateComplexModel(string $name)
    {
        $modelPath = sprintf('%s/%s.php', $this->path, $name);
        $fields = $this->complexTypes[$name]['fields'];
        $base = $name === 'Metadata' ? '\\' . BaseMetadataModel::class : $this->complexTypes[$name]['base'];
        $contents = sprintf(<<<EOF
<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace %s;

/**
 * Class %s
 * @package %s
 *

EOF
            , $this->namespace, $name, $this->package);
        foreach ($fields as $field) {
            $contents .= sprintf(
                " * @property %s%s|null $%s\n",
                array_key_exists($field['type'], $this->enums) ? 'string' : $field['type'],
                $field['multiple'] ? '[]' : '',
                $field['name']
            );
        }
        $contents .= sprintf(<<<EOF
 */
class %s%s
{

EOF
            , $name, empty($base) ? '' : sprintf(' extends %s', $base));
        $contents .= "    public static \$classMap = [\n";
        foreach ($fields as $field) {
            if (array_key_exists($field['type'], $this->complexTypes)) {
                $contents .= sprintf(<<<EOF
        '%s' => [
            'multiple' => %s,
            'type' => %s::class,
        ],

EOF
                    , $field['name'], $field['multiple'] ? 'true' : 'false', $field['type']);
            }
        }
        $contents .= <<<EOF
    ];


EOF;
        $firstFunction = true;
        foreach ($fields as $field) {
            if (!$firstFunction) {
                $contents .= "\n\n";
            }
            $firstFunction = false;
            $contents .= sprintf(<<<EOF
    public function %s(%s $%s)
    {
        \$this->%s = $%s%s;
    }
EOF
                , preg_replace_callback('/^(.)(.*)$/', function ($matches) {
                    return 'set' . strtoupper($matches[1]) . $matches[2];
                }, $field['name']),
                $field['multiple'] ? 'array' : $field['type'],
                $field['name'],
                $field['name'],
                $field['name'],
                !$field['multiple'] && array_key_exists($field['type'], $this->enums) ? '->getValue()' : ''
            );
        }
        $contents .= "\n}\n";
        file_put_contents($modelPath, $contents);
    }

    private function generateEnumModel(string $name)
    {
        $modelPath = sprintf(__DIR__ . '/../Models/Metadata/%s.php', $name);

        $contents = sprintf(<<<EOF
<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace %s;

use MyCLabs\Enum\Enum;

class %s extends Enum
{

EOF
            , $this->namespace, $name);
        foreach ($this->enums[$name] as $variant) {
            $contents .= sprintf(
                "    const %s = '%s';\n",
                strtoupper(preg_replace('/(?<![A-Z_]|^)([A-Z]+[a-z0-9]*)/', '_\1', preg_replace('/\W/', '_', $variant))),
                $variant
            );
        }
        $contents .= "}\n";

        file_put_contents($modelPath, $contents);
    }
}

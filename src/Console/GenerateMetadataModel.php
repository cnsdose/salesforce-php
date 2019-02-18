<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 18/02/19
 * Time: 2:41 PM
 */

namespace CNSDose\Salesforce\Console;

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
    protected $signature = 'salesforce:generate-metadata-model';

    private $complexTypes = [];
    private $enums = [];

    public function handle()
    {
        $this->parseWsdl();
        foreach (array_keys($this->complexTypes) as $type) {
            $this->generateComplexModel($type);
        }
        foreach (array_keys($this->enums) as $type) {
            $this->generateEnumModel($type);
        }
    }

    private function parseWsdl()
    {
        $wsdl = __DIR__ . '/../../wsdl/metadata.wsdl.xml';
        // parse only CustomObject related models
        $toParse = ['CustomObject'];

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
        while (!empty($toParse)) {
            $modelName = array_shift($toParse);
            $reader->open($wsdl);
            while ($reader->read() && $reader->name !== 'xsd:simpleType' && $reader->name !== 'xsd:complexType') ;
            while ($reader->getAttribute('name') !== $modelName && $reader->next()) ;

            $type = $reader->name;
            if ($type === 'xsd:simpleType') {
                // enum
                $variants = [];
                while ($reader->read() && $reader->name !== 'xsd:simpleType') {
                    if ($reader->name === 'xsd:enumeration') {
                        $variants[] = $reader->getAttribute('value');
                    }
                }
                $this->enums[$modelName] = $variants;
            } elseif ($type === 'xsd:complexType') {
                $fields = [];
                $reader->read();
                $base = null;
                $reader->name;
                while ($reader->read() && $reader->name !== 'xsd:element') {
                    if ($reader->name === 'xsd:extension') {
                        $base = substr($reader->getAttribute('base'), 4);
                        if (!array_key_exists($base, $this->complexTypes) && !in_array($base, $toParse, true)) {
                            $toParse[] = $base;
                        }
                    }
                }
                while ($reader->name === 'xsd:element') {
                    $attrName = $reader->getAttribute('name');
                    $attrMultiple = $reader->getAttribute('maxOccurs') !== null;
                    $attrType = $reader->getAttribute('type');
                    if (strpos($attrType, 'tns:') === 0) {
                        $attrType = substr($attrType, 4);
                        if (!array_key_exists($attrType, $this->complexTypes)
                            && !array_key_exists($attrType, $this->enums)
                            && !in_array($attrType, $toParse, true)) {
                            $toParse[] = $attrType;
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

            $reader->close();
        }
    }

    private function generateComplexModel(string $name)
    {
        $modelPath = sprintf(__DIR__ . '/../Models/Metadata/%s.php', $name);
        $fields = $this->complexTypes[$name]['fields'];
        $base = $this->complexTypes[$name]['base'];
        $contents = sprintf(<<<EOF
<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class %s
 * @package CNSDose\Salesforce\Models\Metadata
 *

EOF
            , $name);
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

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class %s extends Enum
{

EOF
            , $name);
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

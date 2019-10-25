<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FlowVariable
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $apexClass
 * @property string|null $dataType
 * @property bool|null $isCollection
 * @property bool|null $isInput
 * @property bool|null $isOutput
 * @property string|null $objectType
 * @property int|null $scale
 * @property FlowElementReferenceOrValue|null $value
 */
class FlowVariable extends FlowElement
{
    public static $classMap = [
        'value' => [
            'multiple' => false,
            'type' => FlowElementReferenceOrValue::class,
        ],
    ];

    public function setApexClass(string $apexClass)
    {
        $this->apexClass = $apexClass;
    }

    public function setDataType(FlowDataType $dataType)
    {
        $this->dataType = $dataType->getValue();
    }

    public function setIsCollection(bool $isCollection)
    {
        $this->isCollection = $isCollection;
    }

    public function setIsInput(bool $isInput)
    {
        $this->isInput = $isInput;
    }

    public function setIsOutput(bool $isOutput)
    {
        $this->isOutput = $isOutput;
    }

    public function setObjectType(string $objectType)
    {
        $this->objectType = $objectType;
    }

    public function setScale(int $scale)
    {
        $this->scale = $scale;
    }

    public function setValue(FlowElementReferenceOrValue $value)
    {
        $this->value = $value;
    }
}

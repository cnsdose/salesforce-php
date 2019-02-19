<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FlowElementReferenceOrValue
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $booleanValue
 * @property string|null $dateTimeValue
 * @property string|null $dateValue
 * @property string|null $elementReference
 * @property float|null $numberValue
 * @property string|null $stringValue
 */
class FlowElementReferenceOrValue
{
    public static $classMap = [
    ];

    public function setBooleanValue(bool $booleanValue)
    {
        $this->booleanValue = $booleanValue;
    }

    public function setDateTimeValue(string $dateTimeValue)
    {
        $this->dateTimeValue = $dateTimeValue;
    }

    public function setDateValue(string $dateValue)
    {
        $this->dateValue = $dateValue;
    }

    public function setElementReference(string $elementReference)
    {
        $this->elementReference = $elementReference;
    }

    public function setNumberValue(float $numberValue)
    {
        $this->numberValue = $numberValue;
    }

    public function setStringValue(string $stringValue)
    {
        $this->stringValue = $stringValue;
    }
}

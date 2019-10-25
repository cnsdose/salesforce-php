<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ReportCustomDetailFormula
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $calculatedFormula
 * @property string|null $dataType
 * @property string|null $description
 * @property string|null $developerName
 * @property string|null $label
 * @property int|null $scale
 */
class ReportCustomDetailFormula
{
    public static $classMap = [
    ];

    public function setCalculatedFormula(string $calculatedFormula)
    {
        $this->calculatedFormula = $calculatedFormula;
    }

    public function setDataType(string $dataType)
    {
        $this->dataType = $dataType;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setDeveloperName(string $developerName)
    {
        $this->developerName = $developerName;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setScale(int $scale)
    {
        $this->scale = $scale;
    }
}

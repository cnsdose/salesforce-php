<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ReportAggregate
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $acrossGroupingContext
 * @property string|null $calculatedFormula
 * @property string|null $datatype
 * @property string|null $description
 * @property string|null $developerName
 * @property string|null $downGroupingContext
 * @property bool|null $isActive
 * @property bool|null $isCrossBlock
 * @property string|null $masterLabel
 * @property string|null $reportType
 * @property int|null $scale
 */
class ReportAggregate
{
    public static $classMap = [
    ];

    public function setAcrossGroupingContext(string $acrossGroupingContext)
    {
        $this->acrossGroupingContext = $acrossGroupingContext;
    }

    public function setCalculatedFormula(string $calculatedFormula)
    {
        $this->calculatedFormula = $calculatedFormula;
    }

    public function setDatatype(ReportAggregateDatatype $datatype)
    {
        $this->datatype = $datatype->getValue();
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setDeveloperName(string $developerName)
    {
        $this->developerName = $developerName;
    }

    public function setDownGroupingContext(string $downGroupingContext)
    {
        $this->downGroupingContext = $downGroupingContext;
    }

    public function setIsActive(bool $isActive)
    {
        $this->isActive = $isActive;
    }

    public function setIsCrossBlock(bool $isCrossBlock)
    {
        $this->isCrossBlock = $isCrossBlock;
    }

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }

    public function setReportType(string $reportType)
    {
        $this->reportType = $reportType;
    }

    public function setScale(int $scale)
    {
        $this->scale = $scale;
    }
}

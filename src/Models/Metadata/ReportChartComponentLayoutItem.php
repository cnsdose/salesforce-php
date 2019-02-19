<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ReportChartComponentLayoutItem
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $cacheData
 * @property string|null $contextFilterableField
 * @property string|null $error
 * @property bool|null $hideOnError
 * @property bool|null $includeContext
 * @property string|null $reportName
 * @property bool|null $showTitle
 * @property string|null $size
 */
class ReportChartComponentLayoutItem
{
    public static $classMap = [
    ];

    public function setCacheData(bool $cacheData)
    {
        $this->cacheData = $cacheData;
    }

    public function setContextFilterableField(string $contextFilterableField)
    {
        $this->contextFilterableField = $contextFilterableField;
    }

    public function setError(string $error)
    {
        $this->error = $error;
    }

    public function setHideOnError(bool $hideOnError)
    {
        $this->hideOnError = $hideOnError;
    }

    public function setIncludeContext(bool $includeContext)
    {
        $this->includeContext = $includeContext;
    }

    public function setReportName(string $reportName)
    {
        $this->reportName = $reportName;
    }

    public function setShowTitle(bool $showTitle)
    {
        $this->showTitle = $showTitle;
    }

    public function setSize(ReportChartComponentSize $size)
    {
        $this->size = $size->getValue();
    }
}

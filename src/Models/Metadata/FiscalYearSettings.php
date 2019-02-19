<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FiscalYearSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $fiscalYearNameBasedOn
 * @property string|null $startMonth
 */
class FiscalYearSettings
{
    public static $classMap = [
    ];

    public function setFiscalYearNameBasedOn(string $fiscalYearNameBasedOn)
    {
        $this->fiscalYearNameBasedOn = $fiscalYearNameBasedOn;
    }

    public function setStartMonth(string $startMonth)
    {
        $this->startMonth = $startMonth;
    }
}

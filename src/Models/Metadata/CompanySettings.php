<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CompanySettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property FiscalYearSettings|null $fiscalYear
 */
class CompanySettings extends Metadata
{
    public static $classMap = [
        'fiscalYear' => [
            'multiple' => false,
            'type' => FiscalYearSettings::class,
        ],
    ];

    public function setFiscalYear(FiscalYearSettings $fiscalYear)
    {
        $this->fiscalYear = $fiscalYear;
    }
}

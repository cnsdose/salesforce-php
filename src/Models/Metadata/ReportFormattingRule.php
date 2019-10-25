<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ReportFormattingRule
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $aggregate
 * @property string|null $columnName
 * @property ReportFormattingRuleValue[]|null $values
 */
class ReportFormattingRule
{
    public static $classMap = [
        'values' => [
            'multiple' => true,
            'type' => ReportFormattingRuleValue::class,
        ],
    ];

    public function setAggregate(ReportSummaryType $aggregate)
    {
        $this->aggregate = $aggregate->getValue();
    }

    public function setColumnName(string $columnName)
    {
        $this->columnName = $columnName;
    }

    public function setValues(array $values)
    {
        $this->values = $values;
    }
}

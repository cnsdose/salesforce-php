<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ReportFormattingRuleValue
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $backgroundColor
 * @property float|null $rangeUpperBound
 */
class ReportFormattingRuleValue
{
    public static $classMap = [
    ];

    public function setBackgroundColor(string $backgroundColor)
    {
        $this->backgroundColor = $backgroundColor;
    }

    public function setRangeUpperBound(float $rangeUpperBound)
    {
        $this->rangeUpperBound = $rangeUpperBound;
    }
}

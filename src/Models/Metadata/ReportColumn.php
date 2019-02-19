<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ReportColumn
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string[]|null $aggregateTypes
 * @property string|null $field
 * @property bool|null $reverseColors
 * @property bool|null $showChanges
 */
class ReportColumn
{
    public static $classMap = [
    ];

    public function setAggregateTypes(array $aggregateTypes)
    {
        $this->aggregateTypes = $aggregateTypes;
    }

    public function setField(string $field)
    {
        $this->field = $field;
    }

    public function setReverseColors(bool $reverseColors)
    {
        $this->reverseColors = $reverseColors;
    }

    public function setShowChanges(bool $showChanges)
    {
        $this->showChanges = $showChanges;
    }
}

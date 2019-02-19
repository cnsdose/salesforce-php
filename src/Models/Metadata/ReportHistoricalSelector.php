<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ReportHistoricalSelector
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string[]|null $snapshot
 */
class ReportHistoricalSelector
{
    public static $classMap = [
    ];

    public function setSnapshot(array $snapshot)
    {
        $this->snapshot = $snapshot;
    }
}

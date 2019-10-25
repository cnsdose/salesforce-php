<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class EssentialsTrialOrgSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableSampleDataDeleted
 */
class EssentialsTrialOrgSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEnableSampleDataDeleted(bool $enableSampleDataDeleted)
    {
        $this->enableSampleDataDeleted = $enableSampleDataDeleted;
    }
}

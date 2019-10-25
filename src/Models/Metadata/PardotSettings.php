<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class PardotSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableB2bmaAppEnabled
 * @property bool|null $enableEngagementHistoryDashboards
 * @property bool|null $enablePardotAppV1Enabled
 * @property bool|null $enablePardotEnabled
 * @property bool|null $enableProspectActivityDataset
 */
class PardotSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEnableB2bmaAppEnabled(bool $enableB2bmaAppEnabled)
    {
        $this->enableB2bmaAppEnabled = $enableB2bmaAppEnabled;
    }

    public function setEnableEngagementHistoryDashboards(bool $enableEngagementHistoryDashboards)
    {
        $this->enableEngagementHistoryDashboards = $enableEngagementHistoryDashboards;
    }

    public function setEnablePardotAppV1Enabled(bool $enablePardotAppV1Enabled)
    {
        $this->enablePardotAppV1Enabled = $enablePardotAppV1Enabled;
    }

    public function setEnablePardotEnabled(bool $enablePardotEnabled)
    {
        $this->enablePardotEnabled = $enablePardotEnabled;
    }

    public function setEnableProspectActivityDataset(bool $enableProspectActivityDataset)
    {
        $this->enableProspectActivityDataset = $enableProspectActivityDataset;
    }
}

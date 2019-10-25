<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class PardotEinsteinSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableCampaignInsight
 * @property bool|null $enableEngagementScore
 */
class PardotEinsteinSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEnableCampaignInsight(bool $enableCampaignInsight)
    {
        $this->enableCampaignInsight = $enableCampaignInsight;
    }

    public function setEnableEngagementScore(bool $enableEngagementScore)
    {
        $this->enableEngagementScore = $enableEngagementScore;
    }
}

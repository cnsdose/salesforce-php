<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CampaignSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableAutoCampInfluenceDisabled
 * @property bool|null $enableB2bmaCampaignInfluence2
 * @property bool|null $enableCampaignHistoryTrackEnabled
 * @property bool|null $enableCampaignInfluence2
 * @property bool|null $enableCampaignMemberTWCF
 * @property bool|null $enableSuppressNoValueCI2
 */
class CampaignSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEnableAutoCampInfluenceDisabled(bool $enableAutoCampInfluenceDisabled)
    {
        $this->enableAutoCampInfluenceDisabled = $enableAutoCampInfluenceDisabled;
    }

    public function setEnableB2bmaCampaignInfluence2(bool $enableB2bmaCampaignInfluence2)
    {
        $this->enableB2bmaCampaignInfluence2 = $enableB2bmaCampaignInfluence2;
    }

    public function setEnableCampaignHistoryTrackEnabled(bool $enableCampaignHistoryTrackEnabled)
    {
        $this->enableCampaignHistoryTrackEnabled = $enableCampaignHistoryTrackEnabled;
    }

    public function setEnableCampaignInfluence2(bool $enableCampaignInfluence2)
    {
        $this->enableCampaignInfluence2 = $enableCampaignInfluence2;
    }

    public function setEnableCampaignMemberTWCF(bool $enableCampaignMemberTWCF)
    {
        $this->enableCampaignMemberTWCF = $enableCampaignMemberTWCF;
    }

    public function setEnableSuppressNoValueCI2(bool $enableSuppressNoValueCI2)
    {
        $this->enableSuppressNoValueCI2 = $enableSuppressNoValueCI2;
    }
}

<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class LightningOnboardingConfig
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $collaborationGroup
 * @property string|null $customQuestion
 * @property int|null $feedbackFormDaysFrequency
 * @property bool|null $isCustom
 * @property string|null $masterLabel
 * @property bool|null $sendFeedbackToSalesforce
 */
class LightningOnboardingConfig extends Metadata
{
    public static $classMap = [
    ];

    public function setCollaborationGroup(string $collaborationGroup)
    {
        $this->collaborationGroup = $collaborationGroup;
    }

    public function setCustomQuestion(string $customQuestion)
    {
        $this->customQuestion = $customQuestion;
    }

    public function setFeedbackFormDaysFrequency(int $feedbackFormDaysFrequency)
    {
        $this->feedbackFormDaysFrequency = $feedbackFormDaysFrequency;
    }

    public function setIsCustom(bool $isCustom)
    {
        $this->isCustom = $isCustom;
    }

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }

    public function setSendFeedbackToSalesforce(bool $sendFeedbackToSalesforce)
    {
        $this->sendFeedbackToSalesforce = $sendFeedbackToSalesforce;
    }
}

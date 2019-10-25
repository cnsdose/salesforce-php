<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class WorkDotComSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableCoachingManagerGroupAccess
 * @property bool|null $enableGoalManagerGroupAccess
 * @property bool|null $enableProfileSkills
 * @property bool|null $enableProfileSkillsAddFeedPost
 * @property bool|null $enableProfileSkillsAutoSuggest
 * @property bool|null $enableProfileSkillsUsePlatform
 * @property bool|null $enableWorkBadgeDefRestrictPref
 * @property bool|null $enableWorkCalibration
 * @property bool|null $enableWorkCanvasPref
 * @property bool|null $enableWorkCertification
 * @property bool|null $enableWorkCertificationNotification
 * @property bool|null $enableWorkRewardsPref
 * @property bool|null $enableWorkThanksPref
 * @property bool|null $enableWorkUseObjectivesForGoals
 */
class WorkDotComSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEnableCoachingManagerGroupAccess(bool $enableCoachingManagerGroupAccess)
    {
        $this->enableCoachingManagerGroupAccess = $enableCoachingManagerGroupAccess;
    }

    public function setEnableGoalManagerGroupAccess(bool $enableGoalManagerGroupAccess)
    {
        $this->enableGoalManagerGroupAccess = $enableGoalManagerGroupAccess;
    }

    public function setEnableProfileSkills(bool $enableProfileSkills)
    {
        $this->enableProfileSkills = $enableProfileSkills;
    }

    public function setEnableProfileSkillsAddFeedPost(bool $enableProfileSkillsAddFeedPost)
    {
        $this->enableProfileSkillsAddFeedPost = $enableProfileSkillsAddFeedPost;
    }

    public function setEnableProfileSkillsAutoSuggest(bool $enableProfileSkillsAutoSuggest)
    {
        $this->enableProfileSkillsAutoSuggest = $enableProfileSkillsAutoSuggest;
    }

    public function setEnableProfileSkillsUsePlatform(bool $enableProfileSkillsUsePlatform)
    {
        $this->enableProfileSkillsUsePlatform = $enableProfileSkillsUsePlatform;
    }

    public function setEnableWorkBadgeDefRestrictPref(bool $enableWorkBadgeDefRestrictPref)
    {
        $this->enableWorkBadgeDefRestrictPref = $enableWorkBadgeDefRestrictPref;
    }

    public function setEnableWorkCalibration(bool $enableWorkCalibration)
    {
        $this->enableWorkCalibration = $enableWorkCalibration;
    }

    public function setEnableWorkCanvasPref(bool $enableWorkCanvasPref)
    {
        $this->enableWorkCanvasPref = $enableWorkCanvasPref;
    }

    public function setEnableWorkCertification(bool $enableWorkCertification)
    {
        $this->enableWorkCertification = $enableWorkCertification;
    }

    public function setEnableWorkCertificationNotification(bool $enableWorkCertificationNotification)
    {
        $this->enableWorkCertificationNotification = $enableWorkCertificationNotification;
    }

    public function setEnableWorkRewardsPref(bool $enableWorkRewardsPref)
    {
        $this->enableWorkRewardsPref = $enableWorkRewardsPref;
    }

    public function setEnableWorkThanksPref(bool $enableWorkThanksPref)
    {
        $this->enableWorkThanksPref = $enableWorkThanksPref;
    }

    public function setEnableWorkUseObjectivesForGoals(bool $enableWorkUseObjectivesForGoals)
    {
        $this->enableWorkUseObjectivesForGoals = $enableWorkUseObjectivesForGoals;
    }
}

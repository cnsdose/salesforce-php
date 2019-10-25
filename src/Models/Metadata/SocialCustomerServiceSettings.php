<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class SocialCustomerServiceSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $caseSubjectOption
 * @property bool|null $enableSocialApprovals
 * @property bool|null $enableSocialCaseAssignmentRules
 * @property bool|null $enableSocialCustomerService
 * @property bool|null $enableSocialPersonaHistoryTracking
 * @property bool|null $enableSocialPostHistoryTracking
 * @property bool|null $enableSocialReceiveParentPost
 */
class SocialCustomerServiceSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setCaseSubjectOption(CaseSubjectOption $caseSubjectOption)
    {
        $this->caseSubjectOption = $caseSubjectOption->getValue();
    }

    public function setEnableSocialApprovals(bool $enableSocialApprovals)
    {
        $this->enableSocialApprovals = $enableSocialApprovals;
    }

    public function setEnableSocialCaseAssignmentRules(bool $enableSocialCaseAssignmentRules)
    {
        $this->enableSocialCaseAssignmentRules = $enableSocialCaseAssignmentRules;
    }

    public function setEnableSocialCustomerService(bool $enableSocialCustomerService)
    {
        $this->enableSocialCustomerService = $enableSocialCustomerService;
    }

    public function setEnableSocialPersonaHistoryTracking(bool $enableSocialPersonaHistoryTracking)
    {
        $this->enableSocialPersonaHistoryTracking = $enableSocialPersonaHistoryTracking;
    }

    public function setEnableSocialPostHistoryTracking(bool $enableSocialPostHistoryTracking)
    {
        $this->enableSocialPostHistoryTracking = $enableSocialPostHistoryTracking;
    }

    public function setEnableSocialReceiveParentPost(bool $enableSocialReceiveParentPost)
    {
        $this->enableSocialReceiveParentPost = $enableSocialReceiveParentPost;
    }
}

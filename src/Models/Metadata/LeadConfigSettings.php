<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class LeadConfigSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $doesEnableLeadConvertDefaultSubjectBlankTaskCreation
 * @property bool|null $doesHideOpportunityInConvertLeadWindow
 * @property bool|null $doesPreserveLeadStatus
 * @property bool|null $doesSelectNoOpportunityOnConvertLead
 * @property bool|null $doesTrackHistory
 * @property bool|null $enableConversionsOnMobile
 * @property bool|null $enableOrgWideMergeAndDelete
 * @property bool|null $shouldLeadConvertRequireValidation
 */
class LeadConfigSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setDoesEnableLeadConvertDefaultSubjectBlankTaskCreation(bool $doesEnableLeadConvertDefaultSubjectBlankTaskCreation)
    {
        $this->doesEnableLeadConvertDefaultSubjectBlankTaskCreation = $doesEnableLeadConvertDefaultSubjectBlankTaskCreation;
    }

    public function setDoesHideOpportunityInConvertLeadWindow(bool $doesHideOpportunityInConvertLeadWindow)
    {
        $this->doesHideOpportunityInConvertLeadWindow = $doesHideOpportunityInConvertLeadWindow;
    }

    public function setDoesPreserveLeadStatus(bool $doesPreserveLeadStatus)
    {
        $this->doesPreserveLeadStatus = $doesPreserveLeadStatus;
    }

    public function setDoesSelectNoOpportunityOnConvertLead(bool $doesSelectNoOpportunityOnConvertLead)
    {
        $this->doesSelectNoOpportunityOnConvertLead = $doesSelectNoOpportunityOnConvertLead;
    }

    public function setDoesTrackHistory(bool $doesTrackHistory)
    {
        $this->doesTrackHistory = $doesTrackHistory;
    }

    public function setEnableConversionsOnMobile(bool $enableConversionsOnMobile)
    {
        $this->enableConversionsOnMobile = $enableConversionsOnMobile;
    }

    public function setEnableOrgWideMergeAndDelete(bool $enableOrgWideMergeAndDelete)
    {
        $this->enableOrgWideMergeAndDelete = $enableOrgWideMergeAndDelete;
    }

    public function setShouldLeadConvertRequireValidation(bool $shouldLeadConvertRequireValidation)
    {
        $this->shouldLeadConvertRequireValidation = $shouldLeadConvertRequireValidation;
    }
}

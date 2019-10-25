<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CommunitiesSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $canModerateAllFeedPosts
 * @property bool|null $canModerateInternalFeedPosts
 * @property bool|null $embeddedVisualforcePages
 * @property bool|null $enableCommunityWorkspaces
 * @property bool|null $enableCspContactVisibilityPref
 * @property bool|null $enableCspNotesOnAccConPref
 * @property bool|null $enableEnablePRM
 * @property bool|null $enableExternalAccHierPref
 * @property bool|null $enableGuestRecordReassignOrgPref
 * @property bool|null $enableInviteChatterGuestEnabled
 * @property bool|null $enableNetPortalUserReportOpts
 * @property bool|null $enableNetworksEnabled
 * @property bool|null $enableOotbProfExtUserOpsEnable
 * @property bool|null $enablePRMAccRelPref
 * @property bool|null $enablePowerCustomerCaseStatus
 * @property bool|null $enableRelaxPartnerAccountFieldPref
 * @property bool|null $enableUsernameUniqForOrgPref
 */
class CommunitiesSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setCanModerateAllFeedPosts(bool $canModerateAllFeedPosts)
    {
        $this->canModerateAllFeedPosts = $canModerateAllFeedPosts;
    }

    public function setCanModerateInternalFeedPosts(bool $canModerateInternalFeedPosts)
    {
        $this->canModerateInternalFeedPosts = $canModerateInternalFeedPosts;
    }

    public function setEmbeddedVisualforcePages(bool $embeddedVisualforcePages)
    {
        $this->embeddedVisualforcePages = $embeddedVisualforcePages;
    }

    public function setEnableCommunityWorkspaces(bool $enableCommunityWorkspaces)
    {
        $this->enableCommunityWorkspaces = $enableCommunityWorkspaces;
    }

    public function setEnableCspContactVisibilityPref(bool $enableCspContactVisibilityPref)
    {
        $this->enableCspContactVisibilityPref = $enableCspContactVisibilityPref;
    }

    public function setEnableCspNotesOnAccConPref(bool $enableCspNotesOnAccConPref)
    {
        $this->enableCspNotesOnAccConPref = $enableCspNotesOnAccConPref;
    }

    public function setEnableEnablePRM(bool $enableEnablePRM)
    {
        $this->enableEnablePRM = $enableEnablePRM;
    }

    public function setEnableExternalAccHierPref(bool $enableExternalAccHierPref)
    {
        $this->enableExternalAccHierPref = $enableExternalAccHierPref;
    }

    public function setEnableGuestRecordReassignOrgPref(bool $enableGuestRecordReassignOrgPref)
    {
        $this->enableGuestRecordReassignOrgPref = $enableGuestRecordReassignOrgPref;
    }

    public function setEnableInviteChatterGuestEnabled(bool $enableInviteChatterGuestEnabled)
    {
        $this->enableInviteChatterGuestEnabled = $enableInviteChatterGuestEnabled;
    }

    public function setEnableNetPortalUserReportOpts(bool $enableNetPortalUserReportOpts)
    {
        $this->enableNetPortalUserReportOpts = $enableNetPortalUserReportOpts;
    }

    public function setEnableNetworksEnabled(bool $enableNetworksEnabled)
    {
        $this->enableNetworksEnabled = $enableNetworksEnabled;
    }

    public function setEnableOotbProfExtUserOpsEnable(bool $enableOotbProfExtUserOpsEnable)
    {
        $this->enableOotbProfExtUserOpsEnable = $enableOotbProfExtUserOpsEnable;
    }

    public function setEnablePRMAccRelPref(bool $enablePRMAccRelPref)
    {
        $this->enablePRMAccRelPref = $enablePRMAccRelPref;
    }

    public function setEnablePowerCustomerCaseStatus(bool $enablePowerCustomerCaseStatus)
    {
        $this->enablePowerCustomerCaseStatus = $enablePowerCustomerCaseStatus;
    }

    public function setEnableRelaxPartnerAccountFieldPref(bool $enableRelaxPartnerAccountFieldPref)
    {
        $this->enableRelaxPartnerAccountFieldPref = $enableRelaxPartnerAccountFieldPref;
    }

    public function setEnableUsernameUniqForOrgPref(bool $enableUsernameUniqForOrgPref)
    {
        $this->enableUsernameUniqForOrgPref = $enableUsernameUniqForOrgPref;
    }
}

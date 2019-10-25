<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class SharingSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableAccountRoleOptimization
 * @property bool|null $enableAssetSharing
 * @property bool|null $enableCommunityUserVisibility
 * @property bool|null $enableExternalSharingModel
 * @property bool|null $enableManagerGroups
 * @property bool|null $enableManualUserRecordSharing
 * @property bool|null $enablePartnerSuperUserAccess
 * @property bool|null $enablePortalUserCaseSharing
 * @property bool|null $enablePortalUserVisibility
 * @property bool|null $enableRemoveTMGroupMembership
 * @property bool|null $enableSecureGuestAccess
 * @property bool|null $enableStandardReportVisibility
 * @property bool|null $enableTerritoryForecastManager
 */
class SharingSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEnableAccountRoleOptimization(bool $enableAccountRoleOptimization)
    {
        $this->enableAccountRoleOptimization = $enableAccountRoleOptimization;
    }

    public function setEnableAssetSharing(bool $enableAssetSharing)
    {
        $this->enableAssetSharing = $enableAssetSharing;
    }

    public function setEnableCommunityUserVisibility(bool $enableCommunityUserVisibility)
    {
        $this->enableCommunityUserVisibility = $enableCommunityUserVisibility;
    }

    public function setEnableExternalSharingModel(bool $enableExternalSharingModel)
    {
        $this->enableExternalSharingModel = $enableExternalSharingModel;
    }

    public function setEnableManagerGroups(bool $enableManagerGroups)
    {
        $this->enableManagerGroups = $enableManagerGroups;
    }

    public function setEnableManualUserRecordSharing(bool $enableManualUserRecordSharing)
    {
        $this->enableManualUserRecordSharing = $enableManualUserRecordSharing;
    }

    public function setEnablePartnerSuperUserAccess(bool $enablePartnerSuperUserAccess)
    {
        $this->enablePartnerSuperUserAccess = $enablePartnerSuperUserAccess;
    }

    public function setEnablePortalUserCaseSharing(bool $enablePortalUserCaseSharing)
    {
        $this->enablePortalUserCaseSharing = $enablePortalUserCaseSharing;
    }

    public function setEnablePortalUserVisibility(bool $enablePortalUserVisibility)
    {
        $this->enablePortalUserVisibility = $enablePortalUserVisibility;
    }

    public function setEnableRemoveTMGroupMembership(bool $enableRemoveTMGroupMembership)
    {
        $this->enableRemoveTMGroupMembership = $enableRemoveTMGroupMembership;
    }

    public function setEnableSecureGuestAccess(bool $enableSecureGuestAccess)
    {
        $this->enableSecureGuestAccess = $enableSecureGuestAccess;
    }

    public function setEnableStandardReportVisibility(bool $enableStandardReportVisibility)
    {
        $this->enableStandardReportVisibility = $enableStandardReportVisibility;
    }

    public function setEnableTerritoryForecastManager(bool $enableTerritoryForecastManager)
    {
        $this->enableTerritoryForecastManager = $enableTerritoryForecastManager;
    }
}

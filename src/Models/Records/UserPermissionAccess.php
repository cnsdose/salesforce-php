<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class UserPermissionAccess
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method UserPermissionAccess[] query()
 *
 * @property string $Id
 * @property \Carbon\Carbon $LastCacheUpdate
 * @property bool $PermissionsEmailSingle
 * @property bool $PermissionsEmailMass
 * @property bool $PermissionsEditTask
 * @property bool $PermissionsEditEvent
 * @property bool $PermissionsExportReport
 * @property bool $PermissionsImportPersonal
 * @property bool $PermissionsDataExport
 * @property bool $PermissionsManageUsers
 * @property bool $PermissionsEditPublicFilters
 * @property bool $PermissionsEditPublicTemplates
 * @property bool $PermissionsModifyAllData
 * @property bool $PermissionsManageCases
 * @property bool $PermissionsMassInlineEdit
 * @property bool $PermissionsEditKnowledge
 * @property bool $PermissionsManageKnowledge
 * @property bool $PermissionsManageSolutions
 * @property bool $PermissionsCustomizeApplication
 * @property bool $PermissionsEditReadonlyFields
 * @property bool $PermissionsRunReports
 * @property bool $PermissionsViewSetup
 * @property bool $PermissionsTransferAnyEntity
 * @property bool $PermissionsNewReportBuilder
 * @property bool $PermissionsActivateContract
 * @property bool $PermissionsActivateOrder
 * @property bool $PermissionsImportLeads
 * @property bool $PermissionsManageLeads
 * @property bool $PermissionsTransferAnyLead
 * @property bool $PermissionsViewAllData
 * @property bool $PermissionsEditPublicDocuments
 * @property bool $PermissionsViewEncryptedData
 * @property bool $PermissionsEditBrandTemplates
 * @property bool $PermissionsEditHtmlTemplates
 * @property bool $PermissionsChatterInternalUser
 * @property bool $PermissionsManageEncryptionKeys
 * @property bool $PermissionsDeleteActivatedContract
 * @property bool $PermissionsChatterInviteExternalUsers
 * @property bool $PermissionsSendSitRequests
 * @property bool $PermissionsManageRemoteAccess
 * @property bool $PermissionsCanUseNewDashboardBuilder
 * @property bool $PermissionsManageCategories
 * @property bool $PermissionsConvertLeads
 * @property bool $PermissionsPasswordNeverExpires
 * @property bool $PermissionsUseTeamReassignWizards
 * @property bool $PermissionsEditActivatedOrders
 * @property bool $PermissionsInstallPackaging
 * @property bool $PermissionsPublishPackaging
 * @property bool $PermissionsChatterOwnGroups
 * @property bool $PermissionsEditOppLineItemUnitPrice
 * @property bool $PermissionsCreatePackaging
 * @property bool $PermissionsBulkApiHardDelete
 * @property bool $PermissionsSolutionImport
 * @property bool $PermissionsManageCallCenters
 * @property bool $PermissionsManageSynonyms
 * @property bool $PermissionsViewContent
 * @property bool $PermissionsManageEmailClientConfig
 * @property bool $PermissionsEnableNotifications
 * @property bool $PermissionsManageDataIntegrations
 * @property bool $PermissionsDistributeFromPersWksp
 * @property bool $PermissionsViewDataCategories
 * @property bool $PermissionsManageDataCategories
 * @property bool $PermissionsAuthorApex
 * @property bool $PermissionsManageMobile
 * @property bool $PermissionsApiEnabled
 * @property bool $PermissionsManageCustomReportTypes
 * @property bool $PermissionsEditCaseComments
 * @property bool $PermissionsTransferAnyCase
 * @property bool $PermissionsContentAdministrator
 * @property bool $PermissionsCreateWorkspaces
 * @property bool $PermissionsManageContentPermissions
 * @property bool $PermissionsManageContentProperties
 * @property bool $PermissionsManageContentTypes
 * @property bool $PermissionsManageExchangeConfig
 * @property bool $PermissionsManageAnalyticSnapshots
 * @property bool $PermissionsScheduleReports
 * @property bool $PermissionsManageBusinessHourHolidays
 * @property bool $PermissionsManageEntitlements
 * @property bool $PermissionsManageDynamicDashboards
 * @property bool $PermissionsCustomSidebarOnAllPages
 * @property bool $PermissionsManageInteraction
 * @property bool $PermissionsViewMyTeamsDashboards
 * @property bool $PermissionsModerateChatter
 * @property bool $PermissionsResetPasswords
 * @property bool $PermissionsFlowUFLRequired
 * @property bool $PermissionsCanInsertFeedSystemFields
 * @property bool $PermissionsActivitiesAccess
 * @property bool $PermissionsManageKnowledgeImportExport
 * @property bool $PermissionsEmailTemplateManagement
 * @property bool $PermissionsEmailAdministration
 * @property bool $PermissionsManageChatterMessages
 * @property bool $PermissionsAllowEmailIC
 * @property bool $PermissionsChatterFileLink
 * @property bool $PermissionsForceTwoFactor
 * @property bool $PermissionsViewEventLogFiles
 * @property bool $PermissionsManageNetworks
 * @property bool $PermissionsManageAuthProviders
 * @property bool $PermissionsRunFlow
 * @property bool $PermissionsCreateCustomizeDashboards
 * @property bool $PermissionsCreateDashboardFolders
 * @property bool $PermissionsViewPublicDashboards
 * @property bool $PermissionsManageDashbdsInPubFolders
 * @property bool $PermissionsCreateCustomizeReports
 * @property bool $PermissionsCreateReportFolders
 * @property bool $PermissionsViewPublicReports
 * @property bool $PermissionsManageReportsInPubFolders
 * @property bool $PermissionsEditMyDashboards
 * @property bool $PermissionsEditMyReports
 * @property bool $PermissionsViewAllUsers
 * @property bool $PermissionsAllowUniversalSearch
 * @property bool $PermissionsConnectOrgToEnvironmentHub
 * @property bool $PermissionsWorkCalibrationUser
 * @property bool $PermissionsCreateCustomizeFilters
 * @property bool $PermissionsCreateReductionOrder
 * @property bool $PermissionsWorkDotComUserPerm
 * @property bool $PermissionsGovernNetworks
 * @property bool $PermissionsSalesConsole
 * @property bool $PermissionsTwoFactorApi
 * @property bool $PermissionsDeleteTopics
 * @property bool $PermissionsEditTopics
 * @property bool $PermissionsCreateTopics
 * @property bool $PermissionsAssignTopics
 * @property bool $PermissionsIdentityEnabled
 * @property bool $PermissionsIdentityConnect
 * @property bool $PermissionsAllowViewKnowledge
 * @property bool $PermissionsContentWorkspaces
 * @property bool $PermissionsManageSearchPromotionRules
 * @property bool $PermissionsCustomMobileAppsAccess
 * @property bool $PermissionsViewHelpLink
 * @property bool $PermissionsManageProfilesPermissionsets
 * @property bool $PermissionsAssignPermissionSets
 * @property bool $PermissionsManageRoles
 * @property bool $PermissionsManageIpAddresses
 * @property bool $PermissionsManageSharing
 * @property bool $PermissionsManageInternalUsers
 * @property bool $PermissionsManagePasswordPolicies
 * @property bool $PermissionsManageLoginAccessPolicies
 * @property bool $PermissionsManageCustomPermissions
 * @property bool $PermissionsCanVerifyComment
 * @property bool $PermissionsManageUnlistedGroups
 * @property bool $PermissionsStdAutomaticActivityCapture
 * @property bool $PermissionsModifySecureAgents
 * @property bool $PermissionsInsightsAppDashboardEditor
 * @property bool $PermissionsManageTwoFactor
 * @property bool $PermissionsInsightsAppUser
 * @property bool $PermissionsInsightsAppAdmin
 * @property bool $PermissionsInsightsAppEltEditor
 * @property bool $PermissionsInsightsAppUploadUser
 * @property bool $PermissionsInsightsCreateApplication
 * @property bool $PermissionsLightningExperienceUser
 * @property bool $PermissionsConfigCustomRecs
 * @property bool $PermissionsSubmitMacrosAllowed
 * @property bool $PermissionsBulkMacrosAllowed
 * @property bool $PermissionsShareInternalArticles
 * @property bool $PermissionsManageSessionPermissionSets
 * @property bool $PermissionsManageTemplatedApp
 * @property bool $PermissionsUseTemplatedApp
 * @property bool $PermissionsSendAnnouncementEmails
 * @property bool $PermissionsChatterEditOwnPost
 * @property bool $PermissionsChatterEditOwnRecordPost
 * @property bool $PermissionsWaveTabularDownload
 * @property bool $PermissionsAutomaticActivityCapture
 * @property bool $PermissionsImportCustomObjects
 * @property bool $PermissionsDelegatedTwoFactor
 * @property bool $PermissionsChatterComposeUiCodesnippet
 * @property bool $PermissionsSelectFilesFromSalesforce
 * @property bool $PermissionsModerateNetworkUsers
 * @property bool $PermissionsMergeTopics
 * @property bool $PermissionsSubscribeToLightningReports
 * @property bool $PermissionsManagePvtRptsAndDashbds
 * @property bool $PermissionsAllowLightningLogin
 * @property bool $PermissionsCampaignInfluence2
 * @property bool $PermissionsViewDataAssessment
 * @property bool $PermissionsRemoveDirectMessageMembers
 * @property bool $PermissionsCanApproveFeedPost
 * @property bool $PermissionsAddDirectMessageMembers
 * @property bool $PermissionsAllowViewEditConvertedLeads
 * @property bool $PermissionsSocialInsightsLogoAdmin
 * @property bool $PermissionsFieldServiceAccess
 * @property bool $PermissionsFieldServiceScheduling
 * @property bool $PermissionsFieldServiceDispatcher
 * @property bool $PermissionsFieldServiceMobileApp
 * @property bool $PermissionsShowCompanyNameAsUserBadge
 * @property bool $PermissionsAccessCMC
 * @property bool $PermissionsOptOutGeoLocationTracking
 * @property bool $PermissionsViewHealthCheck
 * @property bool $PermissionsManageHealthCheck
 * @property bool $PermissionsPackaging2
 * @property bool $PermissionsManageCertificates
 * @property bool $PermissionsCreateReportInLightning
 * @property bool $PermissionsPreventClassicExperience
 * @property bool $PermissionsHideReadByList
 * @property bool $PermissionsListEmailSend
 * @property bool $PermissionsFeedPinning
 * @property bool $PermissionsChangeDashboardColors
 * @property bool $PermissionsIotUser
 * @property bool $PermissionsManageRecommendationStrategies
 * @property bool $PermissionsManagePropositions
 * @property bool $PermissionsCloseConversations
 * @property bool $PermissionsSubscribeReportRolesGrps
 * @property bool $PermissionsSubscribeDashboardRolesGrps
 * @property bool $PermissionsUseWebLink
 * @property bool $PermissionsHasUnlimitedNBAExecutions
 * @property bool $PermissionsViewOnlyEmbeddedAppUser
 * @property bool $PermissionsViewAllActivities
 * @property bool $PermissionsSubscribeReportToOtherUsers
 * @property bool $PermissionsLightningConsoleAllowedForUser
 * @property bool $PermissionsSubscribeReportsRunAsUser
 * @property bool $PermissionsSubscribeToLightningDashboards
 * @property bool $PermissionsSubscribeDashboardToOtherUsers
 * @property bool $PermissionsCreateLtngTempInPub
 * @property bool $PermissionsTransactionalEmailSend
 * @property bool $PermissionsCreateLtngTempFolder
 * @property bool $PermissionsApexRestServices
 * @property bool $PermissionsEnableCommunityAppLauncher
 * @property bool $PermissionsGiveRecognitionBadge
 * @property bool $PermissionsLtngPromoReserved01UserPerm
 * @property bool $PermissionsCanEditDataPrepRecipe
 * @property bool $PermissionsAddAnalyticsRemoteConnections
 * @property bool $PermissionsManageSurveys
 * @property bool $PermissionsViewRoles
 * @property bool $PermissionsEinsteinAssistantUser
 * @property bool $PermissionsCanManageMaps
 * @property bool $PermissionsModifyDataClassification
 * @property bool $PermissionsPrivacyDataAccess
 * @property bool $PermissionsQueryAllFiles
 * @property bool $PermissionsModifyMetadata
 */
class UserPermissionAccess extends BaseRecordModel
{
    public static $objectApiName = 'UserPermissionAccess';
    protected $defaultFields = [
        'Id' => null,
        'LastCacheUpdate' => 'datetime',
        'PermissionsEmailSingle' => 'bool',
        'PermissionsEmailMass' => 'bool',
        'PermissionsEditTask' => 'bool',
        'PermissionsEditEvent' => 'bool',
        'PermissionsExportReport' => 'bool',
        'PermissionsImportPersonal' => 'bool',
        'PermissionsDataExport' => 'bool',
        'PermissionsManageUsers' => 'bool',
        'PermissionsEditPublicFilters' => 'bool',
        'PermissionsEditPublicTemplates' => 'bool',
        'PermissionsModifyAllData' => 'bool',
        'PermissionsManageCases' => 'bool',
        'PermissionsMassInlineEdit' => 'bool',
        'PermissionsEditKnowledge' => 'bool',
        'PermissionsManageKnowledge' => 'bool',
        'PermissionsManageSolutions' => 'bool',
        'PermissionsCustomizeApplication' => 'bool',
        'PermissionsEditReadonlyFields' => 'bool',
        'PermissionsRunReports' => 'bool',
        'PermissionsViewSetup' => 'bool',
        'PermissionsTransferAnyEntity' => 'bool',
        'PermissionsNewReportBuilder' => 'bool',
        'PermissionsActivateContract' => 'bool',
        'PermissionsActivateOrder' => 'bool',
        'PermissionsImportLeads' => 'bool',
        'PermissionsManageLeads' => 'bool',
        'PermissionsTransferAnyLead' => 'bool',
        'PermissionsViewAllData' => 'bool',
        'PermissionsEditPublicDocuments' => 'bool',
        'PermissionsViewEncryptedData' => 'bool',
        'PermissionsEditBrandTemplates' => 'bool',
        'PermissionsEditHtmlTemplates' => 'bool',
        'PermissionsChatterInternalUser' => 'bool',
        'PermissionsManageEncryptionKeys' => 'bool',
        'PermissionsDeleteActivatedContract' => 'bool',
        'PermissionsChatterInviteExternalUsers' => 'bool',
        'PermissionsSendSitRequests' => 'bool',
        'PermissionsManageRemoteAccess' => 'bool',
        'PermissionsCanUseNewDashboardBuilder' => 'bool',
        'PermissionsManageCategories' => 'bool',
        'PermissionsConvertLeads' => 'bool',
        'PermissionsPasswordNeverExpires' => 'bool',
        'PermissionsUseTeamReassignWizards' => 'bool',
        'PermissionsEditActivatedOrders' => 'bool',
        'PermissionsInstallPackaging' => 'bool',
        'PermissionsPublishPackaging' => 'bool',
        'PermissionsChatterOwnGroups' => 'bool',
        'PermissionsEditOppLineItemUnitPrice' => 'bool',
        'PermissionsCreatePackaging' => 'bool',
        'PermissionsBulkApiHardDelete' => 'bool',
        'PermissionsSolutionImport' => 'bool',
        'PermissionsManageCallCenters' => 'bool',
        'PermissionsManageSynonyms' => 'bool',
        'PermissionsViewContent' => 'bool',
        'PermissionsManageEmailClientConfig' => 'bool',
        'PermissionsEnableNotifications' => 'bool',
        'PermissionsManageDataIntegrations' => 'bool',
        'PermissionsDistributeFromPersWksp' => 'bool',
        'PermissionsViewDataCategories' => 'bool',
        'PermissionsManageDataCategories' => 'bool',
        'PermissionsAuthorApex' => 'bool',
        'PermissionsManageMobile' => 'bool',
        'PermissionsApiEnabled' => 'bool',
        'PermissionsManageCustomReportTypes' => 'bool',
        'PermissionsEditCaseComments' => 'bool',
        'PermissionsTransferAnyCase' => 'bool',
        'PermissionsContentAdministrator' => 'bool',
        'PermissionsCreateWorkspaces' => 'bool',
        'PermissionsManageContentPermissions' => 'bool',
        'PermissionsManageContentProperties' => 'bool',
        'PermissionsManageContentTypes' => 'bool',
        'PermissionsManageExchangeConfig' => 'bool',
        'PermissionsManageAnalyticSnapshots' => 'bool',
        'PermissionsScheduleReports' => 'bool',
        'PermissionsManageBusinessHourHolidays' => 'bool',
        'PermissionsManageEntitlements' => 'bool',
        'PermissionsManageDynamicDashboards' => 'bool',
        'PermissionsCustomSidebarOnAllPages' => 'bool',
        'PermissionsManageInteraction' => 'bool',
        'PermissionsViewMyTeamsDashboards' => 'bool',
        'PermissionsModerateChatter' => 'bool',
        'PermissionsResetPasswords' => 'bool',
        'PermissionsFlowUFLRequired' => 'bool',
        'PermissionsCanInsertFeedSystemFields' => 'bool',
        'PermissionsActivitiesAccess' => 'bool',
        'PermissionsManageKnowledgeImportExport' => 'bool',
        'PermissionsEmailTemplateManagement' => 'bool',
        'PermissionsEmailAdministration' => 'bool',
        'PermissionsManageChatterMessages' => 'bool',
        'PermissionsAllowEmailIC' => 'bool',
        'PermissionsChatterFileLink' => 'bool',
        'PermissionsForceTwoFactor' => 'bool',
        'PermissionsViewEventLogFiles' => 'bool',
        'PermissionsManageNetworks' => 'bool',
        'PermissionsManageAuthProviders' => 'bool',
        'PermissionsRunFlow' => 'bool',
        'PermissionsCreateCustomizeDashboards' => 'bool',
        'PermissionsCreateDashboardFolders' => 'bool',
        'PermissionsViewPublicDashboards' => 'bool',
        'PermissionsManageDashbdsInPubFolders' => 'bool',
        'PermissionsCreateCustomizeReports' => 'bool',
        'PermissionsCreateReportFolders' => 'bool',
        'PermissionsViewPublicReports' => 'bool',
        'PermissionsManageReportsInPubFolders' => 'bool',
        'PermissionsEditMyDashboards' => 'bool',
        'PermissionsEditMyReports' => 'bool',
        'PermissionsViewAllUsers' => 'bool',
        'PermissionsAllowUniversalSearch' => 'bool',
        'PermissionsConnectOrgToEnvironmentHub' => 'bool',
        'PermissionsWorkCalibrationUser' => 'bool',
        'PermissionsCreateCustomizeFilters' => 'bool',
        'PermissionsCreateReductionOrder' => 'bool',
        'PermissionsWorkDotComUserPerm' => 'bool',
        'PermissionsGovernNetworks' => 'bool',
        'PermissionsSalesConsole' => 'bool',
        'PermissionsTwoFactorApi' => 'bool',
        'PermissionsDeleteTopics' => 'bool',
        'PermissionsEditTopics' => 'bool',
        'PermissionsCreateTopics' => 'bool',
        'PermissionsAssignTopics' => 'bool',
        'PermissionsIdentityEnabled' => 'bool',
        'PermissionsIdentityConnect' => 'bool',
        'PermissionsAllowViewKnowledge' => 'bool',
        'PermissionsContentWorkspaces' => 'bool',
        'PermissionsManageSearchPromotionRules' => 'bool',
        'PermissionsCustomMobileAppsAccess' => 'bool',
        'PermissionsViewHelpLink' => 'bool',
        'PermissionsManageProfilesPermissionsets' => 'bool',
        'PermissionsAssignPermissionSets' => 'bool',
        'PermissionsManageRoles' => 'bool',
        'PermissionsManageIpAddresses' => 'bool',
        'PermissionsManageSharing' => 'bool',
        'PermissionsManageInternalUsers' => 'bool',
        'PermissionsManagePasswordPolicies' => 'bool',
        'PermissionsManageLoginAccessPolicies' => 'bool',
        'PermissionsManageCustomPermissions' => 'bool',
        'PermissionsCanVerifyComment' => 'bool',
        'PermissionsManageUnlistedGroups' => 'bool',
        'PermissionsStdAutomaticActivityCapture' => 'bool',
        'PermissionsModifySecureAgents' => 'bool',
        'PermissionsInsightsAppDashboardEditor' => 'bool',
        'PermissionsManageTwoFactor' => 'bool',
        'PermissionsInsightsAppUser' => 'bool',
        'PermissionsInsightsAppAdmin' => 'bool',
        'PermissionsInsightsAppEltEditor' => 'bool',
        'PermissionsInsightsAppUploadUser' => 'bool',
        'PermissionsInsightsCreateApplication' => 'bool',
        'PermissionsLightningExperienceUser' => 'bool',
        'PermissionsConfigCustomRecs' => 'bool',
        'PermissionsSubmitMacrosAllowed' => 'bool',
        'PermissionsBulkMacrosAllowed' => 'bool',
        'PermissionsShareInternalArticles' => 'bool',
        'PermissionsManageSessionPermissionSets' => 'bool',
        'PermissionsManageTemplatedApp' => 'bool',
        'PermissionsUseTemplatedApp' => 'bool',
        'PermissionsSendAnnouncementEmails' => 'bool',
        'PermissionsChatterEditOwnPost' => 'bool',
        'PermissionsChatterEditOwnRecordPost' => 'bool',
        'PermissionsWaveTabularDownload' => 'bool',
        'PermissionsAutomaticActivityCapture' => 'bool',
        'PermissionsImportCustomObjects' => 'bool',
        'PermissionsDelegatedTwoFactor' => 'bool',
        'PermissionsChatterComposeUiCodesnippet' => 'bool',
        'PermissionsSelectFilesFromSalesforce' => 'bool',
        'PermissionsModerateNetworkUsers' => 'bool',
        'PermissionsMergeTopics' => 'bool',
        'PermissionsSubscribeToLightningReports' => 'bool',
        'PermissionsManagePvtRptsAndDashbds' => 'bool',
        'PermissionsAllowLightningLogin' => 'bool',
        'PermissionsCampaignInfluence2' => 'bool',
        'PermissionsViewDataAssessment' => 'bool',
        'PermissionsRemoveDirectMessageMembers' => 'bool',
        'PermissionsCanApproveFeedPost' => 'bool',
        'PermissionsAddDirectMessageMembers' => 'bool',
        'PermissionsAllowViewEditConvertedLeads' => 'bool',
        'PermissionsSocialInsightsLogoAdmin' => 'bool',
        'PermissionsFieldServiceAccess' => 'bool',
        'PermissionsFieldServiceScheduling' => 'bool',
        'PermissionsFieldServiceDispatcher' => 'bool',
        'PermissionsFieldServiceMobileApp' => 'bool',
        'PermissionsShowCompanyNameAsUserBadge' => 'bool',
        'PermissionsAccessCMC' => 'bool',
        'PermissionsOptOutGeoLocationTracking' => 'bool',
        'PermissionsViewHealthCheck' => 'bool',
        'PermissionsManageHealthCheck' => 'bool',
        'PermissionsPackaging2' => 'bool',
        'PermissionsManageCertificates' => 'bool',
        'PermissionsCreateReportInLightning' => 'bool',
        'PermissionsPreventClassicExperience' => 'bool',
        'PermissionsHideReadByList' => 'bool',
        'PermissionsListEmailSend' => 'bool',
        'PermissionsFeedPinning' => 'bool',
        'PermissionsChangeDashboardColors' => 'bool',
        'PermissionsIotUser' => 'bool',
        'PermissionsManageRecommendationStrategies' => 'bool',
        'PermissionsManagePropositions' => 'bool',
        'PermissionsCloseConversations' => 'bool',
        'PermissionsSubscribeReportRolesGrps' => 'bool',
        'PermissionsSubscribeDashboardRolesGrps' => 'bool',
        'PermissionsUseWebLink' => 'bool',
        'PermissionsHasUnlimitedNBAExecutions' => 'bool',
        'PermissionsViewOnlyEmbeddedAppUser' => 'bool',
        'PermissionsViewAllActivities' => 'bool',
        'PermissionsSubscribeReportToOtherUsers' => 'bool',
        'PermissionsLightningConsoleAllowedForUser' => 'bool',
        'PermissionsSubscribeReportsRunAsUser' => 'bool',
        'PermissionsSubscribeToLightningDashboards' => 'bool',
        'PermissionsSubscribeDashboardToOtherUsers' => 'bool',
        'PermissionsCreateLtngTempInPub' => 'bool',
        'PermissionsTransactionalEmailSend' => 'bool',
        'PermissionsCreateLtngTempFolder' => 'bool',
        'PermissionsApexRestServices' => 'bool',
        'PermissionsEnableCommunityAppLauncher' => 'bool',
        'PermissionsGiveRecognitionBadge' => 'bool',
        'PermissionsLtngPromoReserved01UserPerm' => 'bool',
        'PermissionsCanEditDataPrepRecipe' => 'bool',
        'PermissionsAddAnalyticsRemoteConnections' => 'bool',
        'PermissionsManageSurveys' => 'bool',
        'PermissionsViewRoles' => 'bool',
        'PermissionsEinsteinAssistantUser' => 'bool',
        'PermissionsCanManageMaps' => 'bool',
        'PermissionsModifyDataClassification' => 'bool',
        'PermissionsPrivacyDataAccess' => 'bool',
        'PermissionsQueryAllFiles' => 'bool',
        'PermissionsModifyMetadata' => 'bool',
    ];
}

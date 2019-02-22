<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class PermissionSetLicense
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method PermissionSetLicense[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $DeveloperName
 * @property mixed $Language
 * @property string $MasterLabel
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $PermissionSetLicenseKey
 * @property mixed $TotalLicenses
 * @property mixed $Status
 * @property \Carbon\Carbon $ExpirationDate
 * @property bool $MaximumPermissionsEmailSingle
 * @property bool $MaximumPermissionsEmailMass
 * @property bool $MaximumPermissionsEditTask
 * @property bool $MaximumPermissionsEditEvent
 * @property bool $MaximumPermissionsExportReport
 * @property bool $MaximumPermissionsImportPersonal
 * @property bool $MaximumPermissionsDataExport
 * @property bool $MaximumPermissionsManageUsers
 * @property bool $MaximumPermissionsEditPublicFilters
 * @property bool $MaximumPermissionsEditPublicTemplates
 * @property bool $MaximumPermissionsModifyAllData
 * @property bool $MaximumPermissionsManageCases
 * @property bool $MaximumPermissionsMassInlineEdit
 * @property bool $MaximumPermissionsEditKnowledge
 * @property bool $MaximumPermissionsManageKnowledge
 * @property bool $MaximumPermissionsManageSolutions
 * @property bool $MaximumPermissionsCustomizeApplication
 * @property bool $MaximumPermissionsEditReadonlyFields
 * @property bool $MaximumPermissionsRunReports
 * @property bool $MaximumPermissionsViewSetup
 * @property bool $MaximumPermissionsTransferAnyEntity
 * @property bool $MaximumPermissionsNewReportBuilder
 * @property bool $MaximumPermissionsActivateContract
 * @property bool $MaximumPermissionsActivateOrder
 * @property bool $MaximumPermissionsImportLeads
 * @property bool $MaximumPermissionsManageLeads
 * @property bool $MaximumPermissionsTransferAnyLead
 * @property bool $MaximumPermissionsViewAllData
 * @property bool $MaximumPermissionsEditPublicDocuments
 * @property bool $MaximumPermissionsViewEncryptedData
 * @property bool $MaximumPermissionsEditBrandTemplates
 * @property bool $MaximumPermissionsEditHtmlTemplates
 * @property bool $MaximumPermissionsChatterInternalUser
 * @property bool $MaximumPermissionsManageEncryptionKeys
 * @property bool $MaximumPermissionsDeleteActivatedContract
 * @property bool $MaximumPermissionsChatterInviteExternalUsers
 * @property bool $MaximumPermissionsSendSitRequests
 * @property bool $MaximumPermissionsManageRemoteAccess
 * @property bool $MaximumPermissionsCanUseNewDashboardBuilder
 * @property bool $MaximumPermissionsManageCategories
 * @property bool $MaximumPermissionsConvertLeads
 * @property bool $MaximumPermissionsPasswordNeverExpires
 * @property bool $MaximumPermissionsUseTeamReassignWizards
 * @property bool $MaximumPermissionsEditActivatedOrders
 * @property bool $MaximumPermissionsInstallPackaging
 * @property bool $MaximumPermissionsPublishPackaging
 * @property bool $MaximumPermissionsChatterOwnGroups
 * @property bool $MaximumPermissionsEditOppLineItemUnitPrice
 * @property bool $MaximumPermissionsCreatePackaging
 * @property bool $MaximumPermissionsBulkApiHardDelete
 * @property bool $MaximumPermissionsSolutionImport
 * @property bool $MaximumPermissionsManageCallCenters
 * @property bool $MaximumPermissionsManageSynonyms
 * @property bool $MaximumPermissionsViewContent
 * @property bool $MaximumPermissionsManageEmailClientConfig
 * @property bool $MaximumPermissionsEnableNotifications
 * @property bool $MaximumPermissionsManageDataIntegrations
 * @property bool $MaximumPermissionsDistributeFromPersWksp
 * @property bool $MaximumPermissionsViewDataCategories
 * @property bool $MaximumPermissionsManageDataCategories
 * @property bool $MaximumPermissionsAuthorApex
 * @property bool $MaximumPermissionsManageMobile
 * @property bool $MaximumPermissionsApiEnabled
 * @property bool $MaximumPermissionsManageCustomReportTypes
 * @property bool $MaximumPermissionsEditCaseComments
 * @property bool $MaximumPermissionsTransferAnyCase
 * @property bool $MaximumPermissionsContentAdministrator
 * @property bool $MaximumPermissionsCreateWorkspaces
 * @property bool $MaximumPermissionsManageContentPermissions
 * @property bool $MaximumPermissionsManageContentProperties
 * @property bool $MaximumPermissionsManageContentTypes
 * @property bool $MaximumPermissionsManageExchangeConfig
 * @property bool $MaximumPermissionsManageAnalyticSnapshots
 * @property bool $MaximumPermissionsScheduleReports
 * @property bool $MaximumPermissionsManageBusinessHourHolidays
 * @property bool $MaximumPermissionsManageEntitlements
 * @property bool $MaximumPermissionsManageDynamicDashboards
 * @property bool $MaximumPermissionsCustomSidebarOnAllPages
 * @property bool $MaximumPermissionsManageInteraction
 * @property bool $MaximumPermissionsViewMyTeamsDashboards
 * @property bool $MaximumPermissionsModerateChatter
 * @property bool $MaximumPermissionsResetPasswords
 * @property bool $MaximumPermissionsFlowUFLRequired
 * @property bool $MaximumPermissionsCanInsertFeedSystemFields
 * @property bool $MaximumPermissionsActivitiesAccess
 * @property bool $MaximumPermissionsManageKnowledgeImportExport
 * @property bool $MaximumPermissionsEmailTemplateManagement
 * @property bool $MaximumPermissionsEmailAdministration
 * @property bool $MaximumPermissionsManageChatterMessages
 * @property bool $MaximumPermissionsAllowEmailIC
 * @property bool $MaximumPermissionsChatterFileLink
 * @property bool $MaximumPermissionsForceTwoFactor
 * @property bool $MaximumPermissionsViewEventLogFiles
 * @property bool $MaximumPermissionsManageNetworks
 * @property bool $MaximumPermissionsManageAuthProviders
 * @property bool $MaximumPermissionsRunFlow
 * @property bool $MaximumPermissionsCreateCustomizeDashboards
 * @property bool $MaximumPermissionsCreateDashboardFolders
 * @property bool $MaximumPermissionsViewPublicDashboards
 * @property bool $MaximumPermissionsManageDashbdsInPubFolders
 * @property bool $MaximumPermissionsCreateCustomizeReports
 * @property bool $MaximumPermissionsCreateReportFolders
 * @property bool $MaximumPermissionsViewPublicReports
 * @property bool $MaximumPermissionsManageReportsInPubFolders
 * @property bool $MaximumPermissionsEditMyDashboards
 * @property bool $MaximumPermissionsEditMyReports
 * @property bool $MaximumPermissionsViewAllUsers
 * @property bool $MaximumPermissionsAllowUniversalSearch
 * @property bool $MaximumPermissionsConnectOrgToEnvironmentHub
 * @property bool $MaximumPermissionsWorkCalibrationUser
 * @property bool $MaximumPermissionsCreateCustomizeFilters
 * @property bool $MaximumPermissionsCreateReductionOrder
 * @property bool $MaximumPermissionsWorkDotComUserPerm
 * @property bool $MaximumPermissionsGovernNetworks
 * @property bool $MaximumPermissionsSalesConsole
 * @property bool $MaximumPermissionsTwoFactorApi
 * @property bool $MaximumPermissionsDeleteTopics
 * @property bool $MaximumPermissionsEditTopics
 * @property bool $MaximumPermissionsCreateTopics
 * @property bool $MaximumPermissionsAssignTopics
 * @property bool $MaximumPermissionsIdentityEnabled
 * @property bool $MaximumPermissionsIdentityConnect
 * @property bool $MaximumPermissionsAllowViewKnowledge
 * @property bool $MaximumPermissionsContentWorkspaces
 * @property bool $MaximumPermissionsManageSearchPromotionRules
 * @property bool $MaximumPermissionsCustomMobileAppsAccess
 * @property bool $MaximumPermissionsViewHelpLink
 * @property bool $MaximumPermissionsManageProfilesPermissionsets
 * @property bool $MaximumPermissionsAssignPermissionSets
 * @property bool $MaximumPermissionsManageRoles
 * @property bool $MaximumPermissionsManageIpAddresses
 * @property bool $MaximumPermissionsManageSharing
 * @property bool $MaximumPermissionsManageInternalUsers
 * @property bool $MaximumPermissionsManagePasswordPolicies
 * @property bool $MaximumPermissionsManageLoginAccessPolicies
 * @property bool $MaximumPermissionsManageCustomPermissions
 * @property bool $MaximumPermissionsCanVerifyComment
 * @property bool $MaximumPermissionsManageUnlistedGroups
 * @property bool $MaximumPermissionsStdAutomaticActivityCapture
 * @property bool $MaximumPermissionsModifySecureAgents
 * @property bool $MaximumPermissionsInsightsAppDashboardEditor
 * @property bool $MaximumPermissionsManageTwoFactor
 * @property bool $MaximumPermissionsInsightsAppUser
 * @property bool $MaximumPermissionsInsightsAppAdmin
 * @property bool $MaximumPermissionsInsightsAppEltEditor
 * @property bool $MaximumPermissionsInsightsAppUploadUser
 * @property bool $MaximumPermissionsInsightsCreateApplication
 * @property bool $MaximumPermissionsLightningExperienceUser
 * @property bool $MaximumPermissionsConfigCustomRecs
 * @property bool $MaximumPermissionsSubmitMacrosAllowed
 * @property bool $MaximumPermissionsBulkMacrosAllowed
 * @property bool $MaximumPermissionsShareInternalArticles
 * @property bool $MaximumPermissionsManageSessionPermissionSets
 * @property bool $MaximumPermissionsManageTemplatedApp
 * @property bool $MaximumPermissionsUseTemplatedApp
 * @property bool $MaximumPermissionsSendAnnouncementEmails
 * @property bool $MaximumPermissionsChatterEditOwnPost
 * @property bool $MaximumPermissionsChatterEditOwnRecordPost
 * @property bool $MaximumPermissionsWaveTabularDownload
 * @property bool $MaximumPermissionsAutomaticActivityCapture
 * @property bool $MaximumPermissionsImportCustomObjects
 * @property bool $MaximumPermissionsDelegatedTwoFactor
 * @property bool $MaximumPermissionsChatterComposeUiCodesnippet
 * @property bool $MaximumPermissionsSelectFilesFromSalesforce
 * @property bool $MaximumPermissionsModerateNetworkUsers
 * @property bool $MaximumPermissionsMergeTopics
 * @property bool $MaximumPermissionsSubscribeToLightningReports
 * @property bool $MaximumPermissionsManagePvtRptsAndDashbds
 * @property bool $MaximumPermissionsAllowLightningLogin
 * @property bool $MaximumPermissionsCampaignInfluence2
 * @property bool $MaximumPermissionsViewDataAssessment
 * @property bool $MaximumPermissionsRemoveDirectMessageMembers
 * @property bool $MaximumPermissionsCanApproveFeedPost
 * @property bool $MaximumPermissionsAddDirectMessageMembers
 * @property bool $MaximumPermissionsAllowViewEditConvertedLeads
 * @property bool $MaximumPermissionsSocialInsightsLogoAdmin
 * @property bool $MaximumPermissionsFieldServiceAccess
 * @property bool $MaximumPermissionsFieldServiceScheduling
 * @property bool $MaximumPermissionsFieldServiceDispatcher
 * @property bool $MaximumPermissionsFieldServiceMobileApp
 * @property bool $MaximumPermissionsShowCompanyNameAsUserBadge
 * @property bool $MaximumPermissionsAccessCMC
 * @property bool $MaximumPermissionsOptOutGeoLocationTracking
 * @property bool $MaximumPermissionsViewHealthCheck
 * @property bool $MaximumPermissionsManageHealthCheck
 * @property bool $MaximumPermissionsPackaging2
 * @property bool $MaximumPermissionsManageCertificates
 * @property bool $MaximumPermissionsCreateReportInLightning
 * @property bool $MaximumPermissionsPreventClassicExperience
 * @property bool $MaximumPermissionsHideReadByList
 * @property bool $MaximumPermissionsListEmailSend
 * @property bool $MaximumPermissionsFeedPinning
 * @property bool $MaximumPermissionsChangeDashboardColors
 * @property bool $MaximumPermissionsIotUser
 * @property bool $MaximumPermissionsManageRecommendationStrategies
 * @property bool $MaximumPermissionsManagePropositions
 * @property bool $MaximumPermissionsCloseConversations
 * @property bool $MaximumPermissionsSubscribeReportRolesGrps
 * @property bool $MaximumPermissionsSubscribeDashboardRolesGrps
 * @property bool $MaximumPermissionsUseWebLink
 * @property bool $MaximumPermissionsHasUnlimitedNBAExecutions
 * @property bool $MaximumPermissionsViewOnlyEmbeddedAppUser
 * @property bool $MaximumPermissionsViewAllActivities
 * @property bool $MaximumPermissionsSubscribeReportToOtherUsers
 * @property bool $MaximumPermissionsLightningConsoleAllowedForUser
 * @property bool $MaximumPermissionsSubscribeReportsRunAsUser
 * @property bool $MaximumPermissionsSubscribeToLightningDashboards
 * @property bool $MaximumPermissionsSubscribeDashboardToOtherUsers
 * @property bool $MaximumPermissionsCreateLtngTempInPub
 * @property bool $MaximumPermissionsTransactionalEmailSend
 * @property bool $MaximumPermissionsCreateLtngTempFolder
 * @property bool $MaximumPermissionsApexRestServices
 * @property bool $MaximumPermissionsEnableCommunityAppLauncher
 * @property bool $MaximumPermissionsGiveRecognitionBadge
 * @property bool $MaximumPermissionsLtngPromoReserved01UserPerm
 * @property bool $MaximumPermissionsCanEditDataPrepRecipe
 * @property bool $MaximumPermissionsAddAnalyticsRemoteConnections
 * @property bool $MaximumPermissionsManageSurveys
 * @property bool $MaximumPermissionsViewRoles
 * @property bool $MaximumPermissionsEinsteinAssistantUser
 * @property bool $MaximumPermissionsCanManageMaps
 * @property bool $MaximumPermissionsModifyDataClassification
 * @property bool $MaximumPermissionsPrivacyDataAccess
 * @property bool $MaximumPermissionsQueryAllFiles
 * @property bool $MaximumPermissionsModifyMetadata
 * @property mixed $UsedLicenses
 */
class PermissionSetLicense extends BaseRecordModel
{
    public static $objectApiName = 'PermissionSetLicense';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'DeveloperName' => null,
        'Language' => null,
        'MasterLabel' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'PermissionSetLicenseKey' => null,
        'TotalLicenses' => null,
        'Status' => null,
        'ExpirationDate' => 'date',
        'MaximumPermissionsEmailSingle' => 'bool',
        'MaximumPermissionsEmailMass' => 'bool',
        'MaximumPermissionsEditTask' => 'bool',
        'MaximumPermissionsEditEvent' => 'bool',
        'MaximumPermissionsExportReport' => 'bool',
        'MaximumPermissionsImportPersonal' => 'bool',
        'MaximumPermissionsDataExport' => 'bool',
        'MaximumPermissionsManageUsers' => 'bool',
        'MaximumPermissionsEditPublicFilters' => 'bool',
        'MaximumPermissionsEditPublicTemplates' => 'bool',
        'MaximumPermissionsModifyAllData' => 'bool',
        'MaximumPermissionsManageCases' => 'bool',
        'MaximumPermissionsMassInlineEdit' => 'bool',
        'MaximumPermissionsEditKnowledge' => 'bool',
        'MaximumPermissionsManageKnowledge' => 'bool',
        'MaximumPermissionsManageSolutions' => 'bool',
        'MaximumPermissionsCustomizeApplication' => 'bool',
        'MaximumPermissionsEditReadonlyFields' => 'bool',
        'MaximumPermissionsRunReports' => 'bool',
        'MaximumPermissionsViewSetup' => 'bool',
        'MaximumPermissionsTransferAnyEntity' => 'bool',
        'MaximumPermissionsNewReportBuilder' => 'bool',
        'MaximumPermissionsActivateContract' => 'bool',
        'MaximumPermissionsActivateOrder' => 'bool',
        'MaximumPermissionsImportLeads' => 'bool',
        'MaximumPermissionsManageLeads' => 'bool',
        'MaximumPermissionsTransferAnyLead' => 'bool',
        'MaximumPermissionsViewAllData' => 'bool',
        'MaximumPermissionsEditPublicDocuments' => 'bool',
        'MaximumPermissionsViewEncryptedData' => 'bool',
        'MaximumPermissionsEditBrandTemplates' => 'bool',
        'MaximumPermissionsEditHtmlTemplates' => 'bool',
        'MaximumPermissionsChatterInternalUser' => 'bool',
        'MaximumPermissionsManageEncryptionKeys' => 'bool',
        'MaximumPermissionsDeleteActivatedContract' => 'bool',
        'MaximumPermissionsChatterInviteExternalUsers' => 'bool',
        'MaximumPermissionsSendSitRequests' => 'bool',
        'MaximumPermissionsManageRemoteAccess' => 'bool',
        'MaximumPermissionsCanUseNewDashboardBuilder' => 'bool',
        'MaximumPermissionsManageCategories' => 'bool',
        'MaximumPermissionsConvertLeads' => 'bool',
        'MaximumPermissionsPasswordNeverExpires' => 'bool',
        'MaximumPermissionsUseTeamReassignWizards' => 'bool',
        'MaximumPermissionsEditActivatedOrders' => 'bool',
        'MaximumPermissionsInstallPackaging' => 'bool',
        'MaximumPermissionsPublishPackaging' => 'bool',
        'MaximumPermissionsChatterOwnGroups' => 'bool',
        'MaximumPermissionsEditOppLineItemUnitPrice' => 'bool',
        'MaximumPermissionsCreatePackaging' => 'bool',
        'MaximumPermissionsBulkApiHardDelete' => 'bool',
        'MaximumPermissionsSolutionImport' => 'bool',
        'MaximumPermissionsManageCallCenters' => 'bool',
        'MaximumPermissionsManageSynonyms' => 'bool',
        'MaximumPermissionsViewContent' => 'bool',
        'MaximumPermissionsManageEmailClientConfig' => 'bool',
        'MaximumPermissionsEnableNotifications' => 'bool',
        'MaximumPermissionsManageDataIntegrations' => 'bool',
        'MaximumPermissionsDistributeFromPersWksp' => 'bool',
        'MaximumPermissionsViewDataCategories' => 'bool',
        'MaximumPermissionsManageDataCategories' => 'bool',
        'MaximumPermissionsAuthorApex' => 'bool',
        'MaximumPermissionsManageMobile' => 'bool',
        'MaximumPermissionsApiEnabled' => 'bool',
        'MaximumPermissionsManageCustomReportTypes' => 'bool',
        'MaximumPermissionsEditCaseComments' => 'bool',
        'MaximumPermissionsTransferAnyCase' => 'bool',
        'MaximumPermissionsContentAdministrator' => 'bool',
        'MaximumPermissionsCreateWorkspaces' => 'bool',
        'MaximumPermissionsManageContentPermissions' => 'bool',
        'MaximumPermissionsManageContentProperties' => 'bool',
        'MaximumPermissionsManageContentTypes' => 'bool',
        'MaximumPermissionsManageExchangeConfig' => 'bool',
        'MaximumPermissionsManageAnalyticSnapshots' => 'bool',
        'MaximumPermissionsScheduleReports' => 'bool',
        'MaximumPermissionsManageBusinessHourHolidays' => 'bool',
        'MaximumPermissionsManageEntitlements' => 'bool',
        'MaximumPermissionsManageDynamicDashboards' => 'bool',
        'MaximumPermissionsCustomSidebarOnAllPages' => 'bool',
        'MaximumPermissionsManageInteraction' => 'bool',
        'MaximumPermissionsViewMyTeamsDashboards' => 'bool',
        'MaximumPermissionsModerateChatter' => 'bool',
        'MaximumPermissionsResetPasswords' => 'bool',
        'MaximumPermissionsFlowUFLRequired' => 'bool',
        'MaximumPermissionsCanInsertFeedSystemFields' => 'bool',
        'MaximumPermissionsActivitiesAccess' => 'bool',
        'MaximumPermissionsManageKnowledgeImportExport' => 'bool',
        'MaximumPermissionsEmailTemplateManagement' => 'bool',
        'MaximumPermissionsEmailAdministration' => 'bool',
        'MaximumPermissionsManageChatterMessages' => 'bool',
        'MaximumPermissionsAllowEmailIC' => 'bool',
        'MaximumPermissionsChatterFileLink' => 'bool',
        'MaximumPermissionsForceTwoFactor' => 'bool',
        'MaximumPermissionsViewEventLogFiles' => 'bool',
        'MaximumPermissionsManageNetworks' => 'bool',
        'MaximumPermissionsManageAuthProviders' => 'bool',
        'MaximumPermissionsRunFlow' => 'bool',
        'MaximumPermissionsCreateCustomizeDashboards' => 'bool',
        'MaximumPermissionsCreateDashboardFolders' => 'bool',
        'MaximumPermissionsViewPublicDashboards' => 'bool',
        'MaximumPermissionsManageDashbdsInPubFolders' => 'bool',
        'MaximumPermissionsCreateCustomizeReports' => 'bool',
        'MaximumPermissionsCreateReportFolders' => 'bool',
        'MaximumPermissionsViewPublicReports' => 'bool',
        'MaximumPermissionsManageReportsInPubFolders' => 'bool',
        'MaximumPermissionsEditMyDashboards' => 'bool',
        'MaximumPermissionsEditMyReports' => 'bool',
        'MaximumPermissionsViewAllUsers' => 'bool',
        'MaximumPermissionsAllowUniversalSearch' => 'bool',
        'MaximumPermissionsConnectOrgToEnvironmentHub' => 'bool',
        'MaximumPermissionsWorkCalibrationUser' => 'bool',
        'MaximumPermissionsCreateCustomizeFilters' => 'bool',
        'MaximumPermissionsCreateReductionOrder' => 'bool',
        'MaximumPermissionsWorkDotComUserPerm' => 'bool',
        'MaximumPermissionsGovernNetworks' => 'bool',
        'MaximumPermissionsSalesConsole' => 'bool',
        'MaximumPermissionsTwoFactorApi' => 'bool',
        'MaximumPermissionsDeleteTopics' => 'bool',
        'MaximumPermissionsEditTopics' => 'bool',
        'MaximumPermissionsCreateTopics' => 'bool',
        'MaximumPermissionsAssignTopics' => 'bool',
        'MaximumPermissionsIdentityEnabled' => 'bool',
        'MaximumPermissionsIdentityConnect' => 'bool',
        'MaximumPermissionsAllowViewKnowledge' => 'bool',
        'MaximumPermissionsContentWorkspaces' => 'bool',
        'MaximumPermissionsManageSearchPromotionRules' => 'bool',
        'MaximumPermissionsCustomMobileAppsAccess' => 'bool',
        'MaximumPermissionsViewHelpLink' => 'bool',
        'MaximumPermissionsManageProfilesPermissionsets' => 'bool',
        'MaximumPermissionsAssignPermissionSets' => 'bool',
        'MaximumPermissionsManageRoles' => 'bool',
        'MaximumPermissionsManageIpAddresses' => 'bool',
        'MaximumPermissionsManageSharing' => 'bool',
        'MaximumPermissionsManageInternalUsers' => 'bool',
        'MaximumPermissionsManagePasswordPolicies' => 'bool',
        'MaximumPermissionsManageLoginAccessPolicies' => 'bool',
        'MaximumPermissionsManageCustomPermissions' => 'bool',
        'MaximumPermissionsCanVerifyComment' => 'bool',
        'MaximumPermissionsManageUnlistedGroups' => 'bool',
        'MaximumPermissionsStdAutomaticActivityCapture' => 'bool',
        'MaximumPermissionsModifySecureAgents' => 'bool',
        'MaximumPermissionsInsightsAppDashboardEditor' => 'bool',
        'MaximumPermissionsManageTwoFactor' => 'bool',
        'MaximumPermissionsInsightsAppUser' => 'bool',
        'MaximumPermissionsInsightsAppAdmin' => 'bool',
        'MaximumPermissionsInsightsAppEltEditor' => 'bool',
        'MaximumPermissionsInsightsAppUploadUser' => 'bool',
        'MaximumPermissionsInsightsCreateApplication' => 'bool',
        'MaximumPermissionsLightningExperienceUser' => 'bool',
        'MaximumPermissionsConfigCustomRecs' => 'bool',
        'MaximumPermissionsSubmitMacrosAllowed' => 'bool',
        'MaximumPermissionsBulkMacrosAllowed' => 'bool',
        'MaximumPermissionsShareInternalArticles' => 'bool',
        'MaximumPermissionsManageSessionPermissionSets' => 'bool',
        'MaximumPermissionsManageTemplatedApp' => 'bool',
        'MaximumPermissionsUseTemplatedApp' => 'bool',
        'MaximumPermissionsSendAnnouncementEmails' => 'bool',
        'MaximumPermissionsChatterEditOwnPost' => 'bool',
        'MaximumPermissionsChatterEditOwnRecordPost' => 'bool',
        'MaximumPermissionsWaveTabularDownload' => 'bool',
        'MaximumPermissionsAutomaticActivityCapture' => 'bool',
        'MaximumPermissionsImportCustomObjects' => 'bool',
        'MaximumPermissionsDelegatedTwoFactor' => 'bool',
        'MaximumPermissionsChatterComposeUiCodesnippet' => 'bool',
        'MaximumPermissionsSelectFilesFromSalesforce' => 'bool',
        'MaximumPermissionsModerateNetworkUsers' => 'bool',
        'MaximumPermissionsMergeTopics' => 'bool',
        'MaximumPermissionsSubscribeToLightningReports' => 'bool',
        'MaximumPermissionsManagePvtRptsAndDashbds' => 'bool',
        'MaximumPermissionsAllowLightningLogin' => 'bool',
        'MaximumPermissionsCampaignInfluence2' => 'bool',
        'MaximumPermissionsViewDataAssessment' => 'bool',
        'MaximumPermissionsRemoveDirectMessageMembers' => 'bool',
        'MaximumPermissionsCanApproveFeedPost' => 'bool',
        'MaximumPermissionsAddDirectMessageMembers' => 'bool',
        'MaximumPermissionsAllowViewEditConvertedLeads' => 'bool',
        'MaximumPermissionsSocialInsightsLogoAdmin' => 'bool',
        'MaximumPermissionsFieldServiceAccess' => 'bool',
        'MaximumPermissionsFieldServiceScheduling' => 'bool',
        'MaximumPermissionsFieldServiceDispatcher' => 'bool',
        'MaximumPermissionsFieldServiceMobileApp' => 'bool',
        'MaximumPermissionsShowCompanyNameAsUserBadge' => 'bool',
        'MaximumPermissionsAccessCMC' => 'bool',
        'MaximumPermissionsOptOutGeoLocationTracking' => 'bool',
        'MaximumPermissionsViewHealthCheck' => 'bool',
        'MaximumPermissionsManageHealthCheck' => 'bool',
        'MaximumPermissionsPackaging2' => 'bool',
        'MaximumPermissionsManageCertificates' => 'bool',
        'MaximumPermissionsCreateReportInLightning' => 'bool',
        'MaximumPermissionsPreventClassicExperience' => 'bool',
        'MaximumPermissionsHideReadByList' => 'bool',
        'MaximumPermissionsListEmailSend' => 'bool',
        'MaximumPermissionsFeedPinning' => 'bool',
        'MaximumPermissionsChangeDashboardColors' => 'bool',
        'MaximumPermissionsIotUser' => 'bool',
        'MaximumPermissionsManageRecommendationStrategies' => 'bool',
        'MaximumPermissionsManagePropositions' => 'bool',
        'MaximumPermissionsCloseConversations' => 'bool',
        'MaximumPermissionsSubscribeReportRolesGrps' => 'bool',
        'MaximumPermissionsSubscribeDashboardRolesGrps' => 'bool',
        'MaximumPermissionsUseWebLink' => 'bool',
        'MaximumPermissionsHasUnlimitedNBAExecutions' => 'bool',
        'MaximumPermissionsViewOnlyEmbeddedAppUser' => 'bool',
        'MaximumPermissionsViewAllActivities' => 'bool',
        'MaximumPermissionsSubscribeReportToOtherUsers' => 'bool',
        'MaximumPermissionsLightningConsoleAllowedForUser' => 'bool',
        'MaximumPermissionsSubscribeReportsRunAsUser' => 'bool',
        'MaximumPermissionsSubscribeToLightningDashboards' => 'bool',
        'MaximumPermissionsSubscribeDashboardToOtherUsers' => 'bool',
        'MaximumPermissionsCreateLtngTempInPub' => 'bool',
        'MaximumPermissionsTransactionalEmailSend' => 'bool',
        'MaximumPermissionsCreateLtngTempFolder' => 'bool',
        'MaximumPermissionsApexRestServices' => 'bool',
        'MaximumPermissionsEnableCommunityAppLauncher' => 'bool',
        'MaximumPermissionsGiveRecognitionBadge' => 'bool',
        'MaximumPermissionsLtngPromoReserved01UserPerm' => 'bool',
        'MaximumPermissionsCanEditDataPrepRecipe' => 'bool',
        'MaximumPermissionsAddAnalyticsRemoteConnections' => 'bool',
        'MaximumPermissionsManageSurveys' => 'bool',
        'MaximumPermissionsViewRoles' => 'bool',
        'MaximumPermissionsEinsteinAssistantUser' => 'bool',
        'MaximumPermissionsCanManageMaps' => 'bool',
        'MaximumPermissionsModifyDataClassification' => 'bool',
        'MaximumPermissionsPrivacyDataAccess' => 'bool',
        'MaximumPermissionsQueryAllFiles' => 'bool',
        'MaximumPermissionsModifyMetadata' => 'bool',
        'UsedLicenses' => null,
    ];
}

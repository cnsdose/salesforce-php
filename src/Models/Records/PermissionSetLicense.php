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
 * @property string $Language
 * @property string $MasterLabel
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $PermissionSetLicenseKey
 * @property mixed $TotalLicenses
 * @property string $Status
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
 * @property bool $MaximumPermissionsOverrideForecasts
 * @property bool $MaximumPermissionsViewAllForecasts
 * @property bool $MaximumPermissionsApiUserOnly
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
 * @property bool $MaximumPermissionsInboundMigrationToolsUser
 * @property bool $MaximumPermissionsSolutionImport
 * @property bool $MaximumPermissionsManageCallCenters
 * @property bool $MaximumPermissionsManageSynonyms
 * @property bool $MaximumPermissionsOutboundMigrationToolsUser
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
 * @property bool $MaximumPermissionsScheduleJob
 * @property bool $MaximumPermissionsManageExchangeConfig
 * @property bool $MaximumPermissionsManageAnalyticSnapshots
 * @property bool $MaximumPermissionsScheduleReports
 * @property bool $MaximumPermissionsManageBusinessHourHolidays
 * @property bool $MaximumPermissionsCustomSidebarOnAllPages
 * @property bool $MaximumPermissionsManageInteraction
 * @property bool $MaximumPermissionsViewMyTeamsDashboards
 * @property bool $MaximumPermissionsModerateChatter
 * @property bool $MaximumPermissionsResetPasswords
 * @property bool $MaximumPermissionsFlowUFLRequired
 * @property bool $MaximumPermissionsCanInsertFeedSystemFields
 * @property bool $MaximumPermissionsActivitiesAccess
 * @property bool $MaximumPermissionsEmailTemplateManagement
 * @property bool $MaximumPermissionsEmailAdministration
 * @property bool $MaximumPermissionsManageChatterMessages
 * @property bool $MaximumPermissionsAllowEmailIC
 * @property bool $MaximumPermissionsChatterFileLink
 * @property bool $MaximumPermissionsForceTwoFactor
 * @property bool $MaximumPermissionsViewEventLogFiles
 * @property bool $MaximumPermissionsManageNetworks
 * @property bool $MaximumPermissionsViewCaseInteraction
 * @property bool $MaximumPermissionsManageAuthProviders
 * @property bool $MaximumPermissionsRunFlow
 * @property bool $MaximumPermissionsManageQuotas
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
 * @property bool $MaximumPermissionsConnectOrgToEnvironmentHub
 * @property bool $MaximumPermissionsCreateCustomizeFilters
 * @property bool $MaximumPermissionsContentHubUser
 * @property bool $MaximumPermissionsGovernNetworks
 * @property bool $MaximumPermissionsSalesConsole
 * @property bool $MaximumPermissionsTwoFactorApi
 * @property bool $MaximumPermissionsDeleteTopics
 * @property bool $MaximumPermissionsEditTopics
 * @property bool $MaximumPermissionsCreateTopics
 * @property bool $MaximumPermissionsAssignTopics
 * @property bool $MaximumPermissionsIdentityEnabled
 * @property bool $MaximumPermissionsIdentityConnect
 * @property bool $MaximumPermissionsContentWorkspaces
 * @property bool $MaximumPermissionsCreateWorkBadgeDefinition
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
 * @property bool $MaximumPermissionsManageTwoFactor
 * @property bool $MaximumPermissionsLightningExperienceUser
 * @property bool $MaximumPermissionsViewDataLeakageEvents
 * @property bool $MaximumPermissionsConfigCustomRecs
 * @property bool $MaximumPermissionsSubmitMacrosAllowed
 * @property bool $MaximumPermissionsBulkMacrosAllowed
 * @property bool $MaximumPermissionsManageSessionPermissionSets
 * @property bool $MaximumPermissionsSendAnnouncementEmails
 * @property bool $MaximumPermissionsChatterEditOwnPost
 * @property bool $MaximumPermissionsChatterEditOwnRecordPost
 * @property bool $MaximumPermissionsCreateAuditFields
 * @property bool $MaximumPermissionsUpdateWithInactiveOwner
 * @property bool $MaximumPermissionsManageSandboxes
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
 * @property bool $MaximumPermissionsShowCompanyNameAsUserBadge
 * @property bool $MaximumPermissionsAccessCMC
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
 * @property bool $MaximumPermissionsManageRecommendationStrategies
 * @property bool $MaximumPermissionsManagePropositions
 * @property bool $MaximumPermissionsCloseConversations
 * @property bool $MaximumPermissionsSubscribeReportRolesGrps
 * @property bool $MaximumPermissionsSubscribeDashboardRolesGrps
 * @property bool $MaximumPermissionsUseWebLink
 * @property bool $MaximumPermissionsHasUnlimitedNBAExecutions
 * @property bool $MaximumPermissionsViewOnlyEmbeddedAppUser
 * @property bool $MaximumPermissionsSendExternalEmailAvailable
 * @property bool $MaximumPermissionsViewAllActivities
 * @property bool $MaximumPermissionsSubscribeReportToOtherUsers
 * @property bool $MaximumPermissionsLightningConsoleAllowedForUser
 * @property bool $MaximumPermissionsSubscribeReportsRunAsUser
 * @property bool $MaximumPermissionsSubscribeToLightningDashboards
 * @property bool $MaximumPermissionsSubscribeDashboardToOtherUsers
 * @property bool $MaximumPermissionsCreateLtngTempInPub
 * @property bool $MaximumPermissionsTransactionalEmailSend
 * @property bool $MaximumPermissionsViewPrivateStaticResources
 * @property bool $MaximumPermissionsCreateLtngTempFolder
 * @property bool $MaximumPermissionsApexRestServices
 * @property bool $MaximumPermissionsGiveRecognitionBadge
 * @property bool $MaximumPermissionsUseMySearch
 * @property bool $MaximumPermissionsLtngPromoReserved01UserPerm
 * @property bool $MaximumPermissionsManageSubscriptions
 * @property bool $MaximumPermissionsManageSurveys
 * @property bool $MaximumPermissionsUseAssistantDialog
 * @property bool $MaximumPermissionsUseQuerySuggestions
 * @property bool $MaximumPermissionsPackaging2PromoteVersion
 * @property bool $MaximumPermissionsRecordVisibilityAPI
 * @property bool $MaximumPermissionsViewRoles
 * @property bool $MaximumPermissionsLMOutboundMessagingUserPerm
 * @property bool $MaximumPermissionsModifyDataClassification
 * @property bool $MaximumPermissionsPrivacyDataAccess
 * @property bool $MaximumPermissionsQueryAllFiles
 * @property bool $MaximumPermissionsModifyMetadata
 * @property bool $MaximumPermissionsCreateContentSpace
 * @property bool $MaximumPermissionsSandboxTestingInCommunityApp
 * @property bool $MaximumPermissionsViewFlowUsageAndFlowEventData
 * @property bool $MaximumPermissionsCanEditPrompts
 * @property bool $MaximumPermissionsManageHubConnections
 * @property bool $MaximumPermissionsB2BMarketingAnalyticsUser
 * @property bool $MaximumPermissionsTraceXdsQueries
 * @property bool $MaximumPermissionsViewAllCustomSettings
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
        'MaximumPermissionsOverrideForecasts' => 'bool',
        'MaximumPermissionsViewAllForecasts' => 'bool',
        'MaximumPermissionsApiUserOnly' => 'bool',
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
        'MaximumPermissionsInboundMigrationToolsUser' => 'bool',
        'MaximumPermissionsSolutionImport' => 'bool',
        'MaximumPermissionsManageCallCenters' => 'bool',
        'MaximumPermissionsManageSynonyms' => 'bool',
        'MaximumPermissionsOutboundMigrationToolsUser' => 'bool',
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
        'MaximumPermissionsScheduleJob' => 'bool',
        'MaximumPermissionsManageExchangeConfig' => 'bool',
        'MaximumPermissionsManageAnalyticSnapshots' => 'bool',
        'MaximumPermissionsScheduleReports' => 'bool',
        'MaximumPermissionsManageBusinessHourHolidays' => 'bool',
        'MaximumPermissionsCustomSidebarOnAllPages' => 'bool',
        'MaximumPermissionsManageInteraction' => 'bool',
        'MaximumPermissionsViewMyTeamsDashboards' => 'bool',
        'MaximumPermissionsModerateChatter' => 'bool',
        'MaximumPermissionsResetPasswords' => 'bool',
        'MaximumPermissionsFlowUFLRequired' => 'bool',
        'MaximumPermissionsCanInsertFeedSystemFields' => 'bool',
        'MaximumPermissionsActivitiesAccess' => 'bool',
        'MaximumPermissionsEmailTemplateManagement' => 'bool',
        'MaximumPermissionsEmailAdministration' => 'bool',
        'MaximumPermissionsManageChatterMessages' => 'bool',
        'MaximumPermissionsAllowEmailIC' => 'bool',
        'MaximumPermissionsChatterFileLink' => 'bool',
        'MaximumPermissionsForceTwoFactor' => 'bool',
        'MaximumPermissionsViewEventLogFiles' => 'bool',
        'MaximumPermissionsManageNetworks' => 'bool',
        'MaximumPermissionsViewCaseInteraction' => 'bool',
        'MaximumPermissionsManageAuthProviders' => 'bool',
        'MaximumPermissionsRunFlow' => 'bool',
        'MaximumPermissionsManageQuotas' => 'bool',
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
        'MaximumPermissionsConnectOrgToEnvironmentHub' => 'bool',
        'MaximumPermissionsCreateCustomizeFilters' => 'bool',
        'MaximumPermissionsContentHubUser' => 'bool',
        'MaximumPermissionsGovernNetworks' => 'bool',
        'MaximumPermissionsSalesConsole' => 'bool',
        'MaximumPermissionsTwoFactorApi' => 'bool',
        'MaximumPermissionsDeleteTopics' => 'bool',
        'MaximumPermissionsEditTopics' => 'bool',
        'MaximumPermissionsCreateTopics' => 'bool',
        'MaximumPermissionsAssignTopics' => 'bool',
        'MaximumPermissionsIdentityEnabled' => 'bool',
        'MaximumPermissionsIdentityConnect' => 'bool',
        'MaximumPermissionsContentWorkspaces' => 'bool',
        'MaximumPermissionsCreateWorkBadgeDefinition' => 'bool',
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
        'MaximumPermissionsManageTwoFactor' => 'bool',
        'MaximumPermissionsLightningExperienceUser' => 'bool',
        'MaximumPermissionsViewDataLeakageEvents' => 'bool',
        'MaximumPermissionsConfigCustomRecs' => 'bool',
        'MaximumPermissionsSubmitMacrosAllowed' => 'bool',
        'MaximumPermissionsBulkMacrosAllowed' => 'bool',
        'MaximumPermissionsManageSessionPermissionSets' => 'bool',
        'MaximumPermissionsSendAnnouncementEmails' => 'bool',
        'MaximumPermissionsChatterEditOwnPost' => 'bool',
        'MaximumPermissionsChatterEditOwnRecordPost' => 'bool',
        'MaximumPermissionsCreateAuditFields' => 'bool',
        'MaximumPermissionsUpdateWithInactiveOwner' => 'bool',
        'MaximumPermissionsManageSandboxes' => 'bool',
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
        'MaximumPermissionsShowCompanyNameAsUserBadge' => 'bool',
        'MaximumPermissionsAccessCMC' => 'bool',
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
        'MaximumPermissionsManageRecommendationStrategies' => 'bool',
        'MaximumPermissionsManagePropositions' => 'bool',
        'MaximumPermissionsCloseConversations' => 'bool',
        'MaximumPermissionsSubscribeReportRolesGrps' => 'bool',
        'MaximumPermissionsSubscribeDashboardRolesGrps' => 'bool',
        'MaximumPermissionsUseWebLink' => 'bool',
        'MaximumPermissionsHasUnlimitedNBAExecutions' => 'bool',
        'MaximumPermissionsViewOnlyEmbeddedAppUser' => 'bool',
        'MaximumPermissionsSendExternalEmailAvailable' => 'bool',
        'MaximumPermissionsViewAllActivities' => 'bool',
        'MaximumPermissionsSubscribeReportToOtherUsers' => 'bool',
        'MaximumPermissionsLightningConsoleAllowedForUser' => 'bool',
        'MaximumPermissionsSubscribeReportsRunAsUser' => 'bool',
        'MaximumPermissionsSubscribeToLightningDashboards' => 'bool',
        'MaximumPermissionsSubscribeDashboardToOtherUsers' => 'bool',
        'MaximumPermissionsCreateLtngTempInPub' => 'bool',
        'MaximumPermissionsTransactionalEmailSend' => 'bool',
        'MaximumPermissionsViewPrivateStaticResources' => 'bool',
        'MaximumPermissionsCreateLtngTempFolder' => 'bool',
        'MaximumPermissionsApexRestServices' => 'bool',
        'MaximumPermissionsGiveRecognitionBadge' => 'bool',
        'MaximumPermissionsUseMySearch' => 'bool',
        'MaximumPermissionsLtngPromoReserved01UserPerm' => 'bool',
        'MaximumPermissionsManageSubscriptions' => 'bool',
        'MaximumPermissionsManageSurveys' => 'bool',
        'MaximumPermissionsUseAssistantDialog' => 'bool',
        'MaximumPermissionsUseQuerySuggestions' => 'bool',
        'MaximumPermissionsPackaging2PromoteVersion' => 'bool',
        'MaximumPermissionsRecordVisibilityAPI' => 'bool',
        'MaximumPermissionsViewRoles' => 'bool',
        'MaximumPermissionsLMOutboundMessagingUserPerm' => 'bool',
        'MaximumPermissionsModifyDataClassification' => 'bool',
        'MaximumPermissionsPrivacyDataAccess' => 'bool',
        'MaximumPermissionsQueryAllFiles' => 'bool',
        'MaximumPermissionsModifyMetadata' => 'bool',
        'MaximumPermissionsCreateContentSpace' => 'bool',
        'MaximumPermissionsSandboxTestingInCommunityApp' => 'bool',
        'MaximumPermissionsViewFlowUsageAndFlowEventData' => 'bool',
        'MaximumPermissionsCanEditPrompts' => 'bool',
        'MaximumPermissionsManageHubConnections' => 'bool',
        'MaximumPermissionsB2BMarketingAnalyticsUser' => 'bool',
        'MaximumPermissionsTraceXdsQueries' => 'bool',
        'MaximumPermissionsViewAllCustomSettings' => 'bool',
        'UsedLicenses' => null,
    ];
}

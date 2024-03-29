#!/usr/bin/env bash

DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"

printf 'Generating metadata models\n'
php ./artisan salesforce:generate-metadata-model -N 'CNSDose\Salesforce\Models\Metadata'

declare -A salesforce_objects=(
    ["AcceptedEventRelation"]=""
    ["Account"]=""
    ["AccountBrand"]=""
    ["AccountBrandShare"]=""
    ["AccountContactRelation"]=""
    ["AccountCleanInfo"]=""
    ["AccountContactRole"]=""
    ["AccountHistory"]=""
    ["AccountInsight"]=""
    ["AccountOwnerSharingRule"]=""
    ["AccountPartner"]=""
    ["AccountRelationship"]=""
    ["AccountRelationshipHistory"]=""
    ["AccountRelationshipShare"]=""
    ["AccountRelationshipShareRule"]=""
    ["AccountShare"]=""
    ["AccountTag"]=""
    ["AccountTeamMember"]=""
    ["AccountTerritoryAssignmentRule"]=""
    ["AccountTerritoryAssignmentRuleItem"]=""
    ["AccountTerritorySharingRule"]=""
    ["AccountUserTerritory2View"]=""
    ["ActionLinkGroupTemplate"]=""
    ["ActionLinkTemplate"]=""
    ["ActionPlan"]=""
    ["ActionPlanItem"]=""
    ["ActionPlanShare"]=""
    ["ActionPlanTemplate"]=""
    ["ActionPlanTemplateItem"]=""
    ["ActionPlanTemplateItemValue"]=""
    ["ActionPlanTemplateShare"]=""
    ["ActionPlanTemplateVersion"]=""
    ["ActiveScratchOrg"]=""
    ["ActivityHistory"]=""
    ["ActivityMetric"]=""
    ["AdditionalNumber"]=""
    ["Address"]=""
    ["AgentWork"]=""
    ["AllowedEmailDomain"]=""
    ["Announcement"]=""
    ["ApexClass"]=""
    ["ApexComponent"]=""
    ["ApexLog"]=""
    ["ApexPage"]=""
    ["ApexTestQueueItem"]=""
    ["ApexTestResult"]=""
    ["ApexTestResultLimits"]=""
    ["ApexTestRunResult"]=""
    ["ApexTestSuite"]=""
    ["ApexTrigger"]=""
    ["AppDefinition"]=""
    ["AppExtension"]=""
    ["AppMenuItem"]=""
    ["AppointmentSchedulingPolicy"]=""
    ["Approval"]=""
    ["AppTabMember"]=""
    ["Article Type__DataCategorySelection"]=""
    ["Asset"]=""
    ["AssetOwnerSharingRule"]=""
    ["AssetRelationship"]=""
    ["AssetShare"]=""
    ["AssetTag"]=""
    ["AssetTokenEvent"]=""
    ["AssignedResource"]=""
    ["AssignmentRule"]=""
    ["AssociatedLocation"]=""
    ["AsyncApexJob"]=""
    ["AttachedContentDocument"]=""
    ["AttachedContentNote"]=""
    ["Attachment"]=""
    ["Audience"]=""
    ["AuraDefinition"]=""
    ["AuraDefinitionBundle"]=""
    ["AuthConfig"]=""
    ["AuthConfigProviders"]=""
    ["AuthProvider"]=""
    ["AuthSession"]=""
    ["BackgroundOperation"]=""
    ["BackgroundOperationResult"]=""
    ["BatchApexErrorEvent (Beta)"]=""
    ["Bookmark"]=""
    ["BrandTemplate"]=""
    ["BusinessHours"]=""
    ["BusinessProcess"]=""
    ["Calendar"]=""
    ["CallCenter"]=""
    ["Campaign"]=""
    ["CampaignHistory"]=""
    ["CampaignInfluence"]=""
    ["CampaignInfluenceModel"]=""
    ["CampaignMember"]=""
    ["CampaignMemberStatus"]=""
    ["CampaignOwnerSharingRule"]=""
    ["CampaignShare"]=""
    ["CampaignTag"]=""
    ["CareDiagnosis"]=""
    ["CareBarrier"]=""
    ["CareBarrierDeterminant"]=""
    ["CareBarrierType"]=""
    ["CareDeterminant"]=""
    ["CareDeterminantType"]=""
    ["CareInterventionType"]=""
    ["CareRequest"]=""
    ["CareRequestConfiguration"]=""
    ["CareRequestDrug"]=""
    ["CareRequestItem"]=""
    ["Case"]="SupportCase"
    ["CaseArticle"]=""
    ["CaseComment"]=""
    ["CaseContactRole"]=""
    ["CaseHistory"]=""
    ["CaseMilestone"]=""
    ["CaseOwnerSharingRule"]=""
    ["CaseShare"]=""
    ["CaseSolution"]=""
    ["CaseStatus"]=""
    ["CaseTag"]=""
    ["CaseTeamMember"]=""
    ["CaseTeamRole"]=""
    ["CaseTeamTemplate"]=""
    ["CaseTeamTemplateMember"]=""
    ["CaseTeamTemplateRecord"]=""
    ["CategoryData"]=""
    ["CategoryNode"]=""
    ["CategoryNodeLocalization"]=""
    ["ChannelProgram"]=""
    ["ChannelProgramHistory"]=""
    ["ChannelProgramLevel"]=""
    ["ChannelProgramLevelHistory"]=""
    ["ChannelProgramLevelShare"]=""
    ["ChannelProgramMember"]=""
    ["ChannelProgramMemberShare"]=""
    ["ChannelProgramOwnerSharingRule"]=""
    ["ChannelProgramShare"]=""
    ["ChatterActivity"]=""
    ["ChatterAnswersActivity"]=""
    ["ChatterAnswersReputationLevel"]=""
    ["ChatterConversation"]=""
    ["ChatterConversationMember"]=""
    ["ChatterMessage"]=""
    ["ClientBrowser"]=""
    ["CollaborationGroup"]=""
    ["CollaborationGroupMember"]=""
    ["CollaborationGroupMemberRequest"]=""
    ["CollaborationGroupRecord"]=""
    ["CollaborationInvitation"]=""
    ["ColorDefinition"]=""
    ["CombinedAttachment"]=""
    ["Community (Zone)"]=""
    ["ConnectedApplication"]=""
    ["Contact"]=""
    ["ContactCleanInfo"]=""
    ["ContactHistory"]=""
    ["ContactPointTypeConsent"]=""
    ["ContactPointTypeConsentHistory"]=""
    ["ContactPointTypeConsentShare"]=""
    ["ContactOwnerSharingRule"]=""
    ["ContactRequest"]=""
    ["ContactRequestShare"]=""
    ["ContactShare"]=""
    ["ContactSuggestionInsight"]=""
    ["ContactTag"]=""
    ["ContentAsset"]=""
    ["ContentBody"]=""
    ["ContentDistribution"]=""
    ["ContentDistributionView"]=""
    ["ContentDocument"]=""
    ["ContentDocumentHistory"]=""
    ["ContentDocumentLink"]=""
    ["ContentDocumentListViewMapping"]=""
    ["ContentDocumentSubscription"]=""
    ["ContentFolder"]=""
    ["ContentFolderItem"]=""
    ["ContentFolderLink"]=""
    ["ContentFolderMember"]=""
    ["ContentHubItem"]=""
    ["ContentHubRepository"]=""
    ["ContentNote"]=""
    ["ContentNotification"]=""
    ["ContentTagSubscription"]=""
    ["ContentUserSubscription"]=""
    ["ContentVersion"]=""
    ["ContentVersionComment"]=""
    ["ContentVersionHistory"]=""
    ["ContentVersionRating"]=""
    ["ContentWorkspace"]=""
    ["ContentWorkspaceDoc"]=""
    ["ContentWorkspaceMember"]=""
    ["ContentWorkspacePermission"]=""
    ["ContentWorkspaceSubscription"]=""
    ["Contract"]=""
    ["ContractContactRole"]=""
    ["ContractHistory"]=""
    ["ContractLineItem"]=""
    ["ContractLineItemHistory"]=""
    ["ContractStatus"]=""
    ["ContractTag"]=""
    ["ConversationEntry"]=""
    ["CorsWhitelistEntry"]=""
    ["CronJobDetail"]=""
    ["CronTrigger"]=""
    ["CurrencyType"]=""
    ["CustomBrand"]=""
    ["CustomBrandAsset"]=""
    ["CustomHelpMenuItem"]=""
    ["CustomHelpMenuSection"]=""
    ["CustomHttpHeader"]=""
    ["CustomPermission"]=""
    ["CustomPermissionDependency"]=""
    ["DandBCompany"]=""
    ["Dashboard"]=""
    ["DashboardComponent"]=""
    ["DashboardTag"]=""
    ["DataAssessmentFieldMetric"]=""
    ["DataAssessmentMetric"]=""
    ["DataAssessmentValueMetric"]=""
    ["DatacloudCompany"]=""
    ["DatacloudContact"]=""
    ["DatacloudDandBCompany"]=""
    ["DatacloudOwnedEntity"]=""
    ["DatacloudPurchaseUsage"]=""
    ["DatacloudSocialHandle"]=""
    ["DataIntegrationRecordPurchasePermission"]=""
    ["DatasetExport"]=""
    ["DatasetExportPart"]=""
    ["DataUseLegalBasis"]=""
    ["DataUseLegalBasisHistory"]=""
    ["DataUseLegalBasisOwnerSharingRule"]=""
    ["DataUseLegalBasisShare"]=""
    ["DataUsePurpose"]=""
    ["DataUsePurposeHistory"]=""
    ["DataUsePurposeOwnerSharingRule"]=""
    ["DataUsePurposeShare"]=""
    ["DatedConversionRate"]=""
    ["DcSocialProfile"]=""
    ["DcSocialProfileHandle"]=""
    ["DeclinedEventRelation"]=""
    ["DigitalSignature"]=""
    ["Division"]=""
    ["DivisionLocalization"]=""
    ["Document"]=""
    ["DocumentAttachmentMap"]=""
    ["DocumentTag"]=""
    ["Domain"]=""
    ["DomainSite"]=""
    ["DuplicateJob"]=""
    ["DuplicateJobDefinition"]=""
    ["DuplicateJobMatchingRule"]=""
    ["DuplicateJobMatchingRuleDefinition"]=""
    ["DuplicateRecordItem"]=""
    ["DuplicateRecordSet"]=""
    ["DuplicateRule"]=""
    ["EmailDomainFilter"]=""
    ["EmailDomainKey"]=""
    ["EmailMessage"]=""
    ["EmailMessageRelation"]=""
    ["EmailRelay"]=""
    ["EmailServicesAddress"]=""
    ["EmailServicesFunction"]=""
    ["EmailStatus"]=""
    ["EmailTemplate"]=""
    ["EmbeddedServiceDetail"]=""
    ["EmbeddedServiceLabel"]=""
    ["Entitlement"]=""
    ["EntitlementContact"]=""
    ["EntitlementHistory"]=""
    ["EntitlementTemplate"]=""
    ["EntityHistory"]=""
    ["EntityMilestone"]=""
    ["EntitySubscription"]=""
    ["EnvironmentHubMember"]=""
    ["Event"]=""
    ["EventLogFile"]=""
    ["EventRelation"]=""
    ["EventBusSubscriber"]=""
    ["EventTag"]=""
    ["EventWhoRelation"]=""
    ["ExternalDataSource"]=""
    ["ExternalDataUserAuth"]=""
    ["ExternalSocialAccount"]=""
    ["FeedAttachment"]=""
    ["FeedComment"]=""
    ["FeedItem"]=""
    ["FeedLike"]=""
    ["FeedPollChoice"]=""
    ["FeedPollVote"]=""
    ["FeedPost"]=""
    ["FeedRevision"]=""
    ["FeedTrackedChange"]=""
    ["FieldHistoryArchive"]=""
    ["FieldPermissions"]=""
    ["FieldServiceMobileSettings"]=""
    ["FiscalYearSettings"]=""
    ["FlexQueueItem"]=""
    ["FlowInterview"]=""
    ["FlowInterviewOwnerSharingRule"]=""
    ["FlowInterviewShare"]=""
    ["FlowRecordRelation"]=""
    ["FlowStageRelation"]=""
    ["Folder"]=""
    ["FolderedContentDocument"]=""
    ["ForecastingAdjustment"]=""
    ["ForecastingDisplayedFamily"]=""
    ["ForecastingFact"]=""
    ["ForecastingItem"]=""
    ["ForecastingOwnerAdjustment"]=""
    ["ForecastingQuota"]=""
    ["ForecastingShare"]=""
    ["ForecastingType"]=""
    ["ForecastingUserPreference"]=""
    ["ForecastShare"]=""
    ["Goal"]=""
    ["GoalHistory"]=""
    ["GoalLink"]=""
    ["GoalShare"]=""
    ["GoogleDoc"]=""
    ["Group"]=""
    ["GroupMember"]=""
    ["HashtagDefinition"]=""
    ["HealthCareDiagnosis"]=""
    ["HealthCareProcedure"]=""
    ["Holiday"]=""
    ["IconDefinition"]=""
    ["Idea"]=""
    ["IdeaComment"]=""
    ["IdeaReputation"]=""
    ["IdeaReputationLevel"]=""
    ["IdeaTheme"]=""
    ["IframeWhiteListUrl"]=""
    ["Individual"]=""
    ["IndividualHistory"]=""
    ["IndividualShare"]=""
    ["KnowledgeableUser"]=""
    ["KnowledgeArticle"]=""
    ["KnowledgeArticleVersion"]=""
    ["KnowledgeArticleVersionHistory"]=""
    ["KnowledgeArticleViewStat"]=""
    ["KnowledgeArticleVoteStat"]=""
    ["Lead"]=""
    ["LeadCleanInfo"]=""
    ["LeadHistory"]=""
    ["LeadOwnerSharingRule"]=""
    ["LeadShare"]=""
    ["LeadStatus"]=""
    ["LeadTag"]=""
    ["LightningExperienceTheme"]=""
    ["LightningToggleMetrics"]=""
    ["LightningUsageByAppTypeMetrics"]=""
    ["LightningUsageByBrowserMetrics"]=""
    ["LightningUsageByPageMetrics"]=""
    ["LightningUsageByFlexiPageMetrics"]=""
    ["LightningExitByPageMetrics"]=""
    ["LineitemOverride"]=""
    ["LinkedArticle"]=""
    ["LinkedArticleHistory"]=""
    ["ListEmail"]=""
    ["ListEmailIndividualRecipient"]=""
    ["ListEmailRecipientSource"]=""
    ["ListView"]=""
    ["ListViewChart"]=""
    ["ListViewChartInstance"]=""
    ["LiveAgentSession"]=""
    ["LiveAgentSessionHistory"]=""
    ["LiveAgentSessionOwnerSharingRule"]=""
    ["LiveAgentSessionShare"]=""
    ["LiveChatBlockingRule"]=""
    ["LiveChatButton"]=""
    ["LiveChatButtonDeployment"]=""
    ["LiveChatButtonSkill"]=""
    ["LiveChatDeployment"]=""
    ["LiveChatSensitiveDataRule"]=""
    ["LiveChatTranscript"]=""
    ["LiveChatTranscriptEvent"]=""
    ["LiveChatTranscriptHistory"]=""
    ["LiveChatTranscriptOwnerSharingRule"]=""
    ["LiveChatTranscriptShare"]=""
    ["LiveChatTranscriptSkill"]=""
    ["LiveChatUserConfig"]=""
    ["LiveChatUserConfigProfile"]=""
    ["LiveChatUserConfigUser"]=""
    ["LiveChatVisitor"]=""
    ["Location"]=""
    ["LoginEvent"]=""
    ["LoginGeo"]=""
    ["LoginHistory"]=""
    ["LoginIp"]=""
    ["LogoutEventStream (Beta)"]=""
    ["LookedUpFromActivity"]=""
    ["Macro"]=""
    ["MacroHistory"]=""
    ["MacroInstruction"]=""
    ["MacroShare"]=""
    ["MailmergeTemplate"]=""
    ["MaintenanceAsset"]=""
    ["MaintenancePlan"]=""
    ["MatchingRule"]=""
    ["MatchingRuleItem"]=""
    ["MessagingChannel"]=""
    ["MessagingChannelSkill"]=""
    ["MetadataPackage"]=""
    ["MetadataPackageVersion"]=""
    ["Metric"]=""
    ["MetricDataLink"]=""
    ["MetricDataLinkHistory"]=""
    ["MetricHistory"]=""
    ["MetricsDataFile"]=""
    ["MetricShare"]=""
    ["MilestoneType"]=""
    ["MobileSettingsAssignment"]=""
    ["MyDomainDiscoverableLogin"]=""
    ["Name"]=""
    ["NamedCredential"]=""
    ["NamespaceRegistry"]=""
    ["NavigationLinkSet"]=""
    ["NavigationMenuItem"]=""
    ["NavigationMenuItemLocalization"]=""
    ["Network"]=""
    ["NetworkActivityAudit"]=""
    ["NetworkAffinity"]=""
    ["NetworkDiscoverableLogin"]=""
    ["NetworkMember"]=""
    ["NetworkMemberGroup"]=""
    ["NetworkModeration"]=""
    ["NetworkPageOverride"]=""
    ["NetworkSelfRegistration"]=""
    ["NetworkUserHistoryRecent"]=""
    ["Note"]=""
    ["NoteAndAttachment"]=""
    ["NoteTag"]=""
    ["OauthToken"]=""
    ["ObjectPermissions"]=""
    ["ObjectTerritory2AssignmentRule"]=""
    ["ObjectTerritory2AssignmentRuleItem"]=""
    ["ObjectTerritory2Association"]=""
    ["OpenActivity"]=""
    ["OperatingHours"]=""
    ["OperatingHoursHistory"]=""
    ["Opportunity"]=""
    ["OpportunityCompetitor"]=""
    ["OpportunityContactRole"]=""
    ["OpportunityContactRoleSuggestionInsight"]=""
    ["OpportunityFieldHistory"]=""
    ["OpportunityHistory"]=""
    ["OpportunityInsight"]=""
    ["OpportunityLineItem"]=""
    ["OpportunityLineItemSchedule"]=""
    ["OpportunityOverride"]=""
    ["OpportunityOwnerSharingRule"]=""
    ["OpportunityPartner"]=""
    ["OpportunityShare"]=""
    ["OpportunitySplit"]=""
    ["OpportunitySplitType"]=""
    ["OpportunityStage"]=""
    ["OpportunityTag"]=""
    ["OpportunityTeamMember"]=""
    ["Order"]=""
    ["OrderHistory"]=""
    ["OrderItem"]=""
    ["OrderItemHistory"]=""
    ["OrderOwnerSharingRule"]=""
    ["Organization"]=""
    ["OrgDeleteRequest"]=""
    ["OrgWideEmailAddress"]=""
    ["OutOfOffice"]=""
    ["OwnedContentDocument"]=""
    ["OwnerChangeOptionInfo"]=""
    ["PackageLicense"]=""
    ["PackagePushError"]=""
    ["PackagePushJob"]=""
    ["PackagePushRequest"]=""
    ["PackageSubscriber"]=""
    ["Partner"]=""
    ["PartnerFundAllocation"]=""
    ["PartnerFundAllocationHistory"]=""
    ["PartnerFundAllocationOwnerSharingRule"]=""
    ["PartnerFundAllocationShare"]=""
    ["PartnerFundClaim"]=""
    ["PartnerFundClaimHistory"]=""
    ["PartnerFundClaimOwnerSharingRule"]=""
    ["PartnerFundClaimShare"]=""
    ["PartnerFundRequest"]=""
    ["PartnerFundRequestHistory"]=""
    ["PartnerFundRequestOwnerSharingRule"]=""
    ["PartnerFundRequestShare"]=""
    ["PartnerMarketingBudget"]=""
    ["PartnerMarketingBudgetHistory"]=""
    ["PartnerMarketingBudgetOwnerSharingRule"]=""
    ["PartnerMarketingBudgetShare"]=""
    ["PartnerNetworkConnection"]=""
    ["PartnerNetworkRecordConnection"]=""
    ["PartnerNetworkSyncLog"]=""
    ["PartnerRole"]=""
    ["Period"]=""
    ["PermissionSet"]=""
    ["PermissionSetAssignment"]=""
    ["PermissionSetGroup (Pilot)"]=""
    ["PermissionSetGroupComponent (Pilot)"]=""
    ["PermissionSetLicense"]=""
    ["PermissionSetLicenseAssign"]=""
    ["PermissionSetTabSetting"]=""
    ["PlatformAction"]=""
    ["PlatformStatusAlertEvent"]=""
    ["PresenceUserConfig"]=""
    ["PresenceUserConfigProfile"]=""
    ["PresenceUserConfigUser"]=""
    ["Pricebook2"]=""
    ["Pricebook2History"]=""
    ["PricebookEntry"]=""
    ["ProcessDefinition"]=""
    ["ProcessInstance"]=""
    ["ProcessInstanceHistory"]=""
    ["ProcessInstanceStep"]=""
    ["ProcessInstanceNode"]=""
    ["ProcessInstanceWorkitem"]=""
    ["ProcessNode"]=""
    ["Product2"]=""
    ["ProductConsumed"]=""
    ["ProductEntitlementTemplate"]=""
    ["ProductItem"]=""
    ["ProductItemTransaction"]=""
    ["ProductRequest"]=""
    ["ProductRequestHistory"]=""
    ["ProductRequestLineItem"]=""
    ["ProductRequestOwnerSharingRule"]=""
    ["ProductRequestShare"]=""
    ["ProductRequired"]=""
    ["ProductTransfer"]=""
    ["ProductTransferHistory"]=""
    ["ProductTransferOwnerSharingRule"]=""
    ["ProductTransferShare"]=""
    ["Profile"]=""
    ["ProfileSkill"]=""
    ["ProfileSkillEndorsement"]=""
    ["ProfileSkillEndorsementHistory"]=""
    ["ProfileSkillHistory"]=""
    ["ProfileSkillShare"]=""
    ["ProfileSkillUser"]=""
    ["ProfileSkillUserHistory"]=""
    ["Reference: PushTopic"]=""
    ["QuantityForecast"]=""
    ["QuantityForecastHistory"]=""
    ["QueueRoutingConfig"]=""
    ["Question"]=""
    ["QuestionDataCategorySelection"]=""
    ["QuestionReportAbuse"]=""
    ["QuestionSubscription"]=""
    ["QueueSobject"]=""
    ["QuickText"]=""
    ["QuickTextHistory"]=""
    ["QuickTextOwnerSharingRule"]=""
    ["QuickTextShare"]=""
    ["Quote"]=""
    ["QuoteDocument"]=""
    ["QuoteLineItem"]=""
    ["QuoteOwnerSharingRule"]=""
    ["QuoteShare"]=""
    ["RecentlyViewed"]=""
    ["Recommendation"]=""
    ["RecordAction"]=""
    ["RecordActionHistory"]=""
    ["RecordType"]=""
    ["RecordTypeLocalization"]=""
    ["RemoteKeyCalloutEvent"]=""
    ["Reply"]=""
    ["ReplyReportAbuse"]=""
    ["Report"]=""
    ["ReportTag"]=""
    ["ReputationLevel"]=""
    ["ReputationLevelLocalization"]=""
    ["ReputationPointsRule"]=""
    ["ResourceAbsence"]=""
    ["ResourceAbsenceHistory"]=""
    ["ResourcePreference"]=""
    ["ResourcePreferenceHistory"]=""
    ["ReturnOrder"]=""
    ["ReturnOrderHistory"]=""
    ["ReturnOrderLineItem"]=""
    ["ReturnOrderLineItemHistory"]=""
    ["ReturnOrderOwnerSharingRule"]=""
    ["ReturnOrderShare"]=""
    ["RevenueForecast"]=""
    ["RevenueForecastHistory"]=""
    ["RuleTerritory2Association"]=""
    ["SamlSsoConfig"]=""
    ["Scontrol"]=""
    ["ScontrolLocalization"]=""
    ["ScratchOrgInfo"]=""
    ["SearchPromotionRule"]=""
    ["SecureAgent"]=""
    ["SecureAgentsCluster"]=""
    ["SecurityCustomBaseline"]=""
    ["SelfServiceUser"]=""
    ["ServiceAppointment"]=""
    ["ServiceAppointmentHistory"]=""
    ["ServiceAppointmentOwnerSharingRule"]=""
    ["ServiceAppointmentShare"]=""
    ["ServiceAppointmentStatus"]=""
    ["ServiceChannel"]=""
    ["ServiceChannelStatus"]=""
    ["ServiceContract"]=""
    ["ServiceContractHistory"]=""
    ["ServiceContractOwnerSharingRule"]=""
    ["ServiceContractShare"]=""
    ["ServiceCrew"]=""
    ["ServiceCrewHistory"]=""
    ["ServiceCrewMember"]=""
    ["ServiceCrewMemberHistory"]=""
    ["ServiceCrewOwnerSharingRule"]=""
    ["ServiceCrewShare"]=""
    ["ServicePresenceStatus"]=""
    ["ServiceReport"]=""
    ["ServiceReportLayout"]=""
    ["ServiceResource"]=""
    ["ServiceResourceCapacity"]=""
    ["ServiceResourceCapacityHistory"]=""
    ["ServiceResourceHistory"]=""
    ["ServiceResourceOwnerSharingRule"]=""
    ["ServiceResourceShare"]=""
    ["ServiceResourceSkill"]=""
    ["ServiceResourceSkillHistory"]=""
    ["ServiceTerritory"]=""
    ["ServiceTerritoryHistory"]=""
    ["ServiceTerritoryLocation"]=""
    ["ServiceTerritoryMember"]=""
    ["ServiceTerritoryMemberHistory"]=""
    ["ServiceTerritoryWorkType"]=""
    ["ServiceTerritoryWorkTypeHistory"]=""
    ["SessionPermSetActivation"]=""
    ["SetupAuditTrail"]=""
    ["SetupEntityAccess"]=""
    ["Shipment"]=""
    ["SignupRequest"]=""
    ["Site"]=""
    ["SiteDetail"]=""
    ["SiteDomain"]=""
    ["SiteHistory"]=""
    ["SiteIframeWhitelistUrl"]=""
    ["Skill"]=""
    ["SkillProfile"]=""
    ["SkillRequirement"]=""
    ["SkillRequirementHistory"]=""
    ["SkillUser"]=""
    ["SlaProcess"]=""
    ["SocialPersona"]=""
    ["SocialPersonaHistory"]=""
    ["SocialPost"]=""
    ["SocialPostHistory"]=""
    ["SocialPostShare"]=""
    ["Solution"]=""
    ["SolutionHistory"]=""
    ["SolutionStatus"]=""
    ["SolutionTag"]=""
    ["SOSDeployment"]=""
    ["SOSSession"]=""
    ["SOSSessionActivity"]=""
    ["SOSSessionHistory"]=""
    ["SOSSessionOwnerSharingRule"]=""
    ["SOSSessionShare"]=""
    ["Stamp"]=""
    ["StampAssignment"]=""
    ["StaticResource"]=""
    ["Reference: StreamingChannel"]=""
    ["Salesforce Surveys Object Model"]=""
    ["Survey"]=""
    ["SurveyEmailBranding"]=""
    ["SurveyInvitation"]=""
    ["SurveyInvitationShare"]=""
    ["SurveyPage"]=""
    ["SurveyQuestion"]=""
    ["SurveyQuestionChoice"]=""
    ["SurveyQuestionResponse"]=""
    ["SurveyQuestionScore"]=""
    ["SurveyResponse"]=""
    ["SurveyShare"]=""
    ["SurveySubject"]=""
    ["SurveyVersion"]=""
    ["TabDefinition"]=""
    ["TagDefinition"]=""
    ["Task"]=""
    ["TaskPriority"]=""
    ["TaskRelation"]=""
    ["TaskStatus"]=""
    ["TaskTag"]=""
    ["TaskWhoRelation"]=""
    ["TenantSecret"]=""
    ["Territory"]=""
    ["Territory2"]=""
    ["Territory2Model"]=""
    ["Territory2ModelHistory"]=""
    ["Territory2Type"]=""
    ["TestSuiteMembership"]=""
    ["ThirdPartyAccountLink"]=""
    ["TimeSheet"]=""
    ["TimeSheetEntry"]=""
    ["TimeSheetEntryHistory"]=""
    ["TimeSheetHistory"]=""
    ["TimeSheetOwnerSharingRule"]=""
    ["TimeSheetShare"]=""
    ["TimeSlot"]=""
    ["TimeSlotHistory"]=""
    ["Topic"]=""
    ["TopicAssignment"]=""
    ["TopicLocalization—Beta"]=""
    ["TopicUserEvent"]=""
    ["TransactionSecurityPolicy"]=""
    ["TwoFactorInfo"]=""
    ["TwoFactorMethodsInfo"]=""
    ["TwoFactorTempCode"]=""
    ["UndecidedEventRelation"]=""
    ["User"]=""
    ["UserAccountTeamMember"]=""
    ["UserAppInfo"]=""
    ["UserAppMenuCustomization"]=""
    ["UserAppMenuCustomizationShare"]=""
    ["UserAppMenuItem"]=""
    ["UserAuthCertificate"]=""
    ["UserConfigTransferButton"]=""
    ["UserConfigTransferSkill"]=""
    ["UserCustomBadge"]=""
    ["UserCustomBadgeLocalization"]=""
    ["UserDevice"]=""
    ["UserDeviceApplication"]=""
    ["UserEmailPreferredPerson"]=""
    ["UserEmailPreferredPersonShare"]=""
    ["UserLicense"]=""
    ["UserListView"]=""
    ["UserListViewCriterion"]=""
    ["UserLogin"]=""
    ["UserMembershipSharingRule"]=""
    ["UserPackageLicense"]=""
    ["UserPermissionAccess"]=""
    ["UserPreference"]=""
    ["UserProfile"]=""
    ["UserProvAccount"]=""
    ["UserProvAccountStaging"]=""
    ["UserProvMockTarget"]=""
    ["UserProvisioningConfig"]=""
    ["UserProvisioningLog"]=""
    ["UserProvisioningRequest"]=""
    ["UserProvisioningRequestOwnerSharingRule"]=""
    ["UserProvisioningRequestShare"]=""
    ["UserRecordAccess"]=""
    ["UserRole"]=""
    ["UserServicePresence"]=""
    ["UserShare"]=""
    ["UserTeamMember"]=""
    ["UserTerritory"]=""
    ["UserTerritory2Association"]=""
    ["VerificationHistory"]=""
    ["VisualforceAccessMetrics"]=""
    ["VoiceCall"]=""
    ["VoiceCallList"]=""
    ["VoiceCallListItem"]=""
    ["VoiceCallListShare"]=""
    ["VoiceCallRecording"]=""
    ["VoiceCallRecordingShare"]=""
    ["VoiceCallShare"]=""
    ["VoiceCoaching"]=""
    ["VoiceCoachingShare"]=""
    ["VoiceLocalPresenceNumber"]=""
    ["VoiceMailContent"]=""
    ["VoiceMailContentShare"]=""
    ["VoiceMailGreeting"]=""
    ["VoiceMailGreetingShare"]=""
    ["VoiceMailMessage"]=""
    ["VoiceMailMessageShare"]=""
    ["VoiceUserLine"]=""
    ["VoiceUserLineShare"]=""
    ["VoiceUserPreferences"]=""
    ["VoiceUserPreferencesShare"]=""
    ["VoiceVendorInfo"]=""
    ["VoiceVendorLine"]=""
    ["VoiceVendorLineShare"]=""
    ["Vote"]=""
    ["WebLink"]=""
    ["WebLinkLocalization"]=""
    ["WorkAccess"]=""
    ["WorkAccessShare"]=""
    ["WorkBadge"]=""
    ["WorkBadgeDefinition"]=""
    ["WorkBadgeDefinitionHistory"]=""
    ["WorkBadgeDefinitionShare"]=""
    ["WorkCoaching"]=""
    ["WorkCoachingHistory"]=""
    ["WorkCoachingShare"]=""
    ["WorkFeedback"]=""
    ["WorkFeedbackHistory"]=""
    ["WorkFeedbackQuestion"]=""
    ["WorkFeedbackQuestionHistory"]=""
    ["WorkFeedbackQuestionSet"]=""
    ["WorkFeedbackQuestionSetHistory"]=""
    ["WorkFeedbackQuestionSetShare"]=""
    ["WorkFeedbackQuestionShare"]=""
    ["WorkFeedbackRequest"]=""
    ["WorkFeedbackRequestHistory"]=""
    ["WorkFeedbackRequestShare"]=""
    ["WorkFeedbackShare"]=""
    ["WorkGoal"]=""
    ["WorkGoalCollaborator"]=""
    ["WorkGoalCollaboratorHistory"]=""
    ["WorkGoalHistory"]=""
    ["WorkGoalLink"]=""
    ["WorkGoalShare"]=""
    ["WorkOrder"]=""
    ["WorkOrderHistory"]=""
    ["WorkOrderLineItem"]=""
    ["WorkOrderLineItemHistory"]=""
    ["WorkOrderLineItemStatus"]=""
    ["WorkOrderShare"]=""
    ["WorkOrderStatus"]=""
    ["WorkPerformanceCycle"]=""
    ["WorkPerformanceCycleHistory"]=""
    ["WorkPerformanceCycleShare"]=""
    ["WorkReward"]=""
    ["WorkRewardFund"]=""
    ["WorkRewardFundHistory"]=""
    ["WorkRewardFundShare"]=""
    ["WorkRewardFundType"]=""
    ["WorkRewardFundTypeHistory"]=""
    ["WorkRewardFundTypeShare"]=""
    ["WorkRewardHistory"]=""
    ["WorkRewardShare"]=""
    ["WorkThanks"]=""
    ["WorkThanksShare"]=""
    ["WorkType"]=""
    ["WorkTypeGroup"]=""
    ["WorkTypeGroupHistory"]=""
    ["WorkTypeGroupMember"]=""
    ["WorkTypeGroupMemberHistory"]=""
    ["WorkTypeGroupShare"]=""
    ["WorkTypeHistory"]=""
    ["WorkTypeOwnerSharingRule"]=""
    ["WorkTypeShare "]=""
)

model_dir="$DIR/src/Models/Records"

token=""
token_time=""
function get_token() {
    if [[ -z "$token" ]] || [[ $(( `date +%s` - $token_time )) -gt 240 ]]; then
        token_time=`date +%s`
        token=`php ./artisan salesforce:retrieve-access-token`
    fi
    echo "$token"
}
get_token > /dev/null

N=8
for object_api_name in "${!salesforce_objects[@]}"; do
    ((i=i%N)); ((i++==0)) && wait
    (
        object_class_name="${salesforce_objects[$object_api_name]}"
        if [[ -z "$object_class_name" ]]; then
            object_class_name="$object_api_name"
        fi
        printf 'Generating model %s for object %s\n' "$object_class_name" "$object_api_name"
        php ./artisan salesforce:generate-record-model -T "`get_token`" -N 'CNSDose\Salesforce\Models\Records' -C "$object_class_name" "$object_api_name" > "$model_dir/$object_class_name.php"
        if [[ $? -ne 0 ]]; then
            rm "$model_dir/$object_class_name.php"
        fi
    ) &
done

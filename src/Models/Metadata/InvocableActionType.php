<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class InvocableActionType extends Enum
{
    const APEX = 'apex';
    const CHATTER_POST = 'chatterPost';
    const CONTENT_WORKSPACE_ENABLE_FOLDERS = 'contentWorkspaceEnableFolders';
    const EMAIL_ALERT = 'emailAlert';
    const EMAIL_SIMPLE = 'emailSimple';
    const FLOW = 'flow';
    const METRIC_REFRESH = 'metricRefresh';
    const QUICK_ACTION = 'quickAction';
    const SUBMIT = 'submit';
    const THANKS = 'thanks';
    const THUNDER_RESPONSE = 'thunderResponse';
    const CREATE_SERVICE_REPORT = 'createServiceReport';
    const DEPLOY_ORCHESTRATION = 'deployOrchestration';
    const CREATE_RESPONSE_EVENT_ACTION = 'createResponseEventAction';
    const SFDC_OUTPUT_ACTION = 'sfdcOutputAction';
    const GENERATE_WORK_ORDERS = 'generateWorkOrders';
    const DEACTIVATE_SESSION_PERM_SET = 'deactivateSessionPermSet';
    const ACTIVATE_SESSION_PERM_SET = 'activateSessionPermSet';
    const AGGREGATE_VALUE = 'aggregateValue';
    const ORCHESTRATION_TIMER = 'orchestrationTimer';
    const ORCHESTRATION_DEBUG_LOG = 'orchestrationDebugLog';
    const CHOOSE_PRICEBOOK = 'choosePricebook';
    const COMPONENT = 'component';
    const LIVE_MESSAGE_NOTIFICATION = 'liveMessageNotification';
    const SCALE_CACHE_ASYNC_REFRESH = 'scaleCacheAsyncRefresh';
    const SKILLS_BASED_ROUTING = 'skillsBasedRouting';
    const CREATE_CUSTOM_FIELD = 'createCustomField';
    const ASSIGN_TRAILHEAD_BADGE = 'assignTrailheadBadge';
    const INSIGHT_FEEDBACK = 'insightFeedback';
    const PUBLISH_KNOWLEDGE_ARTICLES = 'publishKnowledgeArticles';
    const ROUTING_ADDRESS_VERIFICATION = 'routingAddressVerification';
    const ASSIGN_TARGET_TO_SALES_CADENCE = 'assignTargetToSalesCadence';
    const REMOVE_TARGET_FROM_SALES_CADENCE = 'removeTargetFromSalesCadence';
    const ASSIGN_KNOWLEDGE_ARTICLES = 'assignKnowledgeArticles';
    const CREATE_DRAFT_FROM_ONLINE_KNOWLEDGE_ARTICLE = 'createDraftFromOnlineKnowledgeArticle';
    const ARCHIVE_KNOWLEDGE_ARTICLES = 'archiveKnowledgeArticles';
    const RESTORE_KNOWLEDGE_ARTICLE_VERSION = 'restoreKnowledgeArticleVersion';
    const CUSTOM_NOTIFICATION_ACTION = 'customNotificationAction';
    const EVALUATE_ORDER = 'evaluateOrder';
    const REDUCE_QUANTITY = 'reduceQuantity';
    const SUBMIT_ORDER = 'submitOrder';
    const SUBMIT_DIGITAL_FORM_RESPONSE = 'submitDigitalFormResponse';
    const CONTACT_REQUEST_ACTION = 'contactRequestAction';
    const SAVE_APPOINTMENT = 'saveAppointment';
    const MANAGED_CONTENT_RELEASE_PUBLISH = 'managedContentReleasePublish';
}

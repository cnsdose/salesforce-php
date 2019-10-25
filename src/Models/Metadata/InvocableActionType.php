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
    const EXTERNAL_SERVICE = 'externalService';
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
    const INVOKE_ORCH_OUTPUT_FLOW = 'invokeOrchOutputFlow';
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
    const SUBMIT_DIGITAL_FORM_RESPONSE = 'submitDigitalFormResponse';
    const CONTACT_REQUEST_ACTION = 'contactRequestAction';
    const SAVE_APPOINTMENT = 'saveAppointment';
    const DELETE_KNOWLEDGE_ARTICLES = 'deleteKnowledgeArticles';
    const SUBMIT_KNOWLEDGE_ARTICLE_FOR_TRANSLATION = 'submitKnowledgeArticleForTranslation';
    const EINSTEIN_EPLITE_PREDICTION_ACTION = 'einsteinEPLitePredictionAction';
    const CART_TO_ORDER_ACTION = 'cartToOrderAction';
    const ORDER_TO_CART_ACTION = 'orderToCartAction';
    const ACTIVATE_ORDER_ACTION = 'activateOrderAction';
    const REFRESH_ACTUALS_CALCULATION = 'refreshActualsCalculation';
    const CANCEL_APPOINTMENT = 'cancelAppointment';
    const RECALCULATE_FORECAST = 'recalculateForecast';
    const MANAGED_CONTENT_RELEASE_PUBLISH = 'managedContentReleasePublish';
    const EDIT_QUIP_DOCUMENT = 'editQuipDocument';
    const ATTACH_QUIP_DOCUMENT_TO_RECORD = 'attachQuipDocumentToRecord';
    const CREATE_QUIP_DOCUMENT = 'createQuipDocument';
    const CREATE_QUIP_FOLDER = 'createQuipFolder';
    const ADD_USERS_TO_QUIP_DOCUMENT = 'addUsersToQuipDocument';
    const COPY_QUIP_DOCUMENT = 'copyQuipDocument';
    const ADD_MESSAGE_TO_QUIP_DOCUMENT = 'addMessageToQuipDocument';
    const ADD_QUIP_DOCUMENT_TO_FOLDER = 'addQuipDocumentToFolder';
    const CREATE_QUIP_CHAT = 'createQuipChat';
    const ADD_MESSAGE_TO_QUIP_CHAT = 'addMessageToQuipChat';
    const ADD_USERS_TO_QUIP_CHAT = 'addUsersToQuipChat';
    const COPY_QUIP_CONTENT = 'copyQuipContent';
    const CREATE_FULFILLMENT_ORDER = 'createFulfillmentOrder';
    const CREATE_INVOICE_FROM_FULFILLMENT_ORDER = 'createInvoiceFromFulfillmentOrder';
    const PRICE_CART = 'priceCart';
    const CART_INITIATE_ASYNC_STEP = 'cartInitiateAsyncStep';
    const CART_COMPLETE_ASYNC_STEP = 'cartCompleteAsyncStep';
    const CANCEL_ORDER_ITEM_SUMMARIES_PREVIEW = 'cancelOrderItemSummariesPreview';
    const CANCEL_ORDER_ITEM_SUMMARIES_SUBMIT = 'cancelOrderItemSummariesSubmit';
    const RETURN_ORDER_ITEM_SUMMARIES_PREVIEW = 'returnOrderItemSummariesPreview';
    const RETURN_ORDER_ITEM_SUMMARIES_SUBMIT = 'returnOrderItemSummariesSubmit';
    const CANCEL_FULFILLMENT_ORDER_ITEM = 'cancelFulfillmentOrderItem';
    const PRINT = 'print';
    const EXPORT_SURVEY_RESPONSES = 'exportSurveyResponses';
    const CREATE_CHECKOUT_SESSION_ACTION = 'createCheckoutSessionAction';
    const CHECK_CART_INVENTORY_ACTION = 'checkCartInventoryAction';
    const CALC_CART_TAXES_ACTION = 'calcCartTaxesAction';
    const CALC_CART_SHIPMENT_ACTION = 'calcCartShipmentAction';
    const CREATE_CREDIT_MEMO_ORDER_SUMMARY = 'createCreditMemoOrderSummary';
    const ENSURE_REFUNDS_ORDER_SUMMARY_ASYNC = 'ensureRefundsOrderSummaryAsync';
    const DECISION_STUDIO_ACTION = 'decisionStudioAction';
    const SEND_SURVEY_INVITATION = 'sendSurveyInvitation';
    const ENSURE_FUNDS_ORDER_SUMMARY_ASYNC = 'ensureFundsOrderSummaryAsync';
    const PUBLISH_PARDOT_CONTENT = 'publishPardotContent';
}

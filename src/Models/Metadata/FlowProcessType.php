<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class FlowProcessType extends Enum
{
    const AUTO_LAUNCHED_FLOW = 'AutoLaunchedFlow';
    const FLOW = 'Flow';
    const WORKFLOW = 'Workflow';
    const CUSTOM_EVENT = 'CustomEvent';
    const INVOCABLE_PROCESS = 'InvocableProcess';
    const LOGIN_FLOW = 'LoginFlow';
    const ACTION_PLAN = 'ActionPlan';
    const JOURNEY_BUILDER_INTEGRATION = 'JourneyBuilderIntegration';
    const USER_PROVISIONING_FLOW = 'UserProvisioningFlow';
    const SURVEY = 'Survey';
    const APPOINTMENTS = 'Appointments';
    const FORM = 'Form';
    const FIELD_SERVICE_MOBILE = 'FieldServiceMobile';
    const ORCHESTRATION_FLOW = 'OrchestrationFlow';
    const FIELD_SERVICE_WEB = 'FieldServiceWeb';
    const TRANSACTION_SECURITY_FLOW = 'TransactionSecurityFlow';
    const CONTACT_REQUEST_FLOW = 'ContactRequestFlow';
    const ACTION_CADENCE_FLOW = 'ActionCadenceFlow';
    const MANAGED_CONTENT_FLOW = 'ManagedContentFlow';
}

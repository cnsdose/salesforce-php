<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class WorkflowActionType extends Enum
{
    const FIELD_UPDATE = 'FieldUpdate';
    const KNOWLEDGE_PUBLISH = 'KnowledgePublish';
    const TASK = 'Task';
    const ALERT = 'Alert';
    const SEND = 'Send';
    const OUTBOUND_MESSAGE = 'OutboundMessage';
    const FLOW_ACTION = 'FlowAction';
}

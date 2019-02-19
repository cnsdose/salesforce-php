<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class ActionEmailSenderType extends Enum
{
    const CURRENT_USER = 'CurrentUser';
    const ORG_WIDE_EMAIL_ADDRESS = 'OrgWideEmailAddress';
    const DEFAULT_WORKFLOW_USER = 'DefaultWorkflowUser';
}

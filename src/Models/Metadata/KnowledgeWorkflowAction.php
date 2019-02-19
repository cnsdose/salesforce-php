<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class KnowledgeWorkflowAction extends Enum
{
    const PUBLISH_AS_NEW = 'PublishAsNew';
    const PUBLISH = 'Publish';
}

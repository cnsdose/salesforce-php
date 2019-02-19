<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class FeedLayoutComponentType extends Enum
{
    const HELP_AND_TOOL_LINKS = 'HelpAndToolLinks';
    const CUSTOM_BUTTONS = 'CustomButtons';
    const FOLLOWING = 'Following';
    const FOLLOWERS = 'Followers';
    const CUSTOM_LINKS = 'CustomLinks';
    const MILESTONES = 'Milestones';
    const TOPICS = 'Topics';
    const CASE_UNIFIED_FILES = 'CaseUnifiedFiles';
    const VISUALFORCE = 'Visualforce';
}

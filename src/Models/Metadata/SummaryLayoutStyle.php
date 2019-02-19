<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class SummaryLayoutStyle extends Enum
{
    const DEFAULT = 'Default';
    const QUOTE_TEMPLATE = 'QuoteTemplate';
    const DEFAULT_QUOTE_TEMPLATE = 'DefaultQuoteTemplate';
    const SERVICE_REPORT_TEMPLATE = 'ServiceReportTemplate';
    const CHILD_SERVICE_REPORT_TEMPLATE_STYLE = 'ChildServiceReportTemplateStyle';
    const DEFAULT_SERVICE_REPORT_TEMPLATE = 'DefaultServiceReportTemplate';
    const CASE_INTERACTION = 'CaseInteraction';
    const QUICK_ACTION_LAYOUT_LEFT_RIGHT = 'QuickActionLayoutLeftRight';
    const QUICK_ACTION_LAYOUT_TOP_DOWN = 'QuickActionLayoutTopDown';
    const PATH_ASSISTANT = 'PathAssistant';
}

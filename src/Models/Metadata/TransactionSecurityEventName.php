<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class TransactionSecurityEventName extends Enum
{
    const REPORT_EVENT = 'ReportEvent';
    const API_EVENT = 'ApiEvent';
    const ADMIN_SETUP_EVENT = 'AdminSetupEvent';
    const LOGIN_EVENT = 'LoginEvent';
    const LIST_VIEW_EVENT = 'ListViewEvent';
}

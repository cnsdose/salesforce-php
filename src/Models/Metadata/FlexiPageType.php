<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class FlexiPageType extends Enum
{
    const APP_PAGE = 'AppPage';
    const OBJECT_PAGE = 'ObjectPage';
    const RECORD_PAGE = 'RecordPage';
    const HOME_PAGE = 'HomePage';
    const MAIL_APP_APP_PAGE = 'MailAppAppPage';
    const COMM_APP_PAGE = 'CommAppPage';
    const COMM_FORGOT_PASSWORD_PAGE = 'CommForgotPasswordPage';
    const COMM_LOGIN_PAGE = 'CommLoginPage';
    const COMM_OBJECT_PAGE = 'CommObjectPage';
    const COMM_QUICK_ACTION_CREATE_PAGE = 'CommQuickActionCreatePage';
    const COMM_RECORD_PAGE = 'CommRecordPage';
    const COMM_RELATED_LIST_PAGE = 'CommRelatedListPage';
    const COMM_SEARCH_RESULT_PAGE = 'CommSearchResultPage';
    const COMM_GLOBAL_SEARCH_RESULT_PAGE = 'CommGlobalSearchResultPage';
    const COMM_SELF_REGISTER_PAGE = 'CommSelfRegisterPage';
    const COMM_THEME_LAYOUT_PAGE = 'CommThemeLayoutPage';
    const COMM_FLOW_PAGE = 'CommFlowPage';
    const UTILITY_BAR = 'UtilityBar';
    const RECORD_PREVIEW = 'RecordPreview';
    const EMBEDDED_SERVICE_PAGE = 'EmbeddedServicePage';
}

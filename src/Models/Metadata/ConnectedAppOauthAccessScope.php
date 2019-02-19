<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class ConnectedAppOauthAccessScope extends Enum
{
    const BASIC = 'Basic';
    const API = 'Api';
    const WEB = 'Web';
    const FULL = 'Full';
    const CHATTER = 'Chatter';
    const CUSTOM_APPLICATIONS = 'CustomApplications';
    const REFRESH_TOKEN = 'RefreshToken';
    const OPEN_ID = 'OpenID';
    const PROFILE = 'Profile';
    const EMAIL = 'Email';
    const ADDRESS = 'Address';
    const PHONE = 'Phone';
    const OFFLINE_ACCESS = 'OfflineAccess';
    const CUSTOM_PERMISSIONS = 'CustomPermissions';
    const WAVE = 'Wave';
    const ECLAIR = 'Eclair';
}

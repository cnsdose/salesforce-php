<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class AuthProviderType extends Enum
{
    const FACEBOOK = 'Facebook';
    const JANRAIN = 'Janrain';
    const SALESFORCE = 'Salesforce';
    const OPEN_ID_CONNECT = 'OpenIdConnect';
    const MICROSOFT_ACS = 'MicrosoftACS';
    const LINKED_IN = 'LinkedIn';
    const TWITTER = 'Twitter';
    const GOOGLE = 'Google';
    const GIT_HUB = 'GitHub';
    const CUSTOM = 'Custom';
}

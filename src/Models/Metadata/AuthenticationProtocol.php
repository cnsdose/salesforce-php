<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class AuthenticationProtocol extends Enum
{
    const NO_AUTHENTICATION = 'NoAuthentication';
    const OAUTH = 'Oauth';
    const PASSWORD = 'Password';
}
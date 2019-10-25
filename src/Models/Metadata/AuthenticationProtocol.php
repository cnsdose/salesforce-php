<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class AuthenticationProtocol extends Enum
{
    const NO_AUTHENTICATION = 'NoAuthentication';
    const OAUTH = 'Oauth';
    const PASSWORD = 'Password';
    const AWS_SV4 = 'AwsSv4';
    const JWT = 'Jwt';
    const JWT_EXCHANGE = 'JwtExchange';
}

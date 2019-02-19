<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class SamlIdentityType extends Enum
{
    const USERNAME = 'Username';
    const FEDERATION_ID = 'FederationId';
    const USER_ID = 'UserId';
}

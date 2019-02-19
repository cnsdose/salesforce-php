<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class SamlSubjectType extends Enum
{
    const USERNAME = 'Username';
    const FEDERATION_ID = 'FederationId';
    const USER_ID = 'UserId';
    const SPOKE_ID = 'SpokeId';
    const CUSTOM_ATTRIBUTE = 'CustomAttribute';
    const PERSISTENT_ID = 'PersistentId';
}

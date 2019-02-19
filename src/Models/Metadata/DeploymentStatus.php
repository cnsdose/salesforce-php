<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class DeploymentStatus extends Enum
{
    const IN_DEVELOPMENT = 'InDevelopment';
    const DEPLOYED = 'Deployed';
}

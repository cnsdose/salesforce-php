<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 15/02/19
 * Time: 3:01 PM
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class DeploymentStatus extends Enum
{
    const IN_DEVELOPMENT = 'InDevelopment';
    const DEPLOYED = 'Deployed';
}

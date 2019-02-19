<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class ContentAssetAccess extends Enum
{
    const VIEWER = 'VIEWER';
    const COLLABORATOR = 'COLLABORATOR';
    const INFERRED = 'INFERRED';
}

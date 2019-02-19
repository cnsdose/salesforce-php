<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class ActionLinkType extends Enum
{
    const API = 'API';
    const APIASYNC = 'APIAsync';
    const DOWNLOAD = 'Download';
    const UI = 'UI';
}

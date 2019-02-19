<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class EmailTemplateType extends Enum
{
    const TEXT = 'text';
    const HTML = 'html';
    const CUSTOM = 'custom';
    const VISUALFORCE = 'visualforce';
}

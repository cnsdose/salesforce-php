<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class PageComponentType extends Enum
{
    const LINKS = 'links';
    const HTML_AREA = 'htmlArea';
    const IMAGE_OR_NOTE = 'imageOrNote';
    const VISUALFORCE_PAGE = 'visualforcePage';
}

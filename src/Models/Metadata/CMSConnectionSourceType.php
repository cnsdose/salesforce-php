<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class CMSConnectionSourceType extends Enum
{
    const AEM = 'AEM';
    const DRUPAL = 'Drupal';
    const WORD_PRESS = 'WordPress';
    const SDL = 'SDL';
    const SITECORE = 'Sitecore';
    const OTHER = 'Other';
}

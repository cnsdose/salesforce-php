<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class FeedLayoutFilterType extends Enum
{
    const ALL_UPDATES = 'AllUpdates';
    const FEED_ITEM_TYPE = 'FeedItemType';
    const CUSTOM = 'Custom';
}

<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class QuickActionListItem
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $quickActionName
 */
class QuickActionListItem
{
    public static $classMap = [
    ];

    public function setQuickActionName(string $quickActionName)
    {
        $this->quickActionName = $quickActionName;
    }
}

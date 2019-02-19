<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class AllOrNoneHeader
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $allOrNone
 */
class AllOrNoneHeader
{
    public static $classMap = [
    ];

    public function setAllOrNone(bool $allOrNone)
    {
        $this->allOrNone = $allOrNone;
    }
}

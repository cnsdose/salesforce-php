<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class QueueSobject
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $sobjectType
 */
class QueueSobject
{
    public static $classMap = [
    ];

    public function setSobjectType(string $sobjectType)
    {
        $this->sobjectType = $sobjectType;
    }
}

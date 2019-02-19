<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class LightningBoltItems
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $name
 * @property string|null $type
 */
class LightningBoltItems
{
    public static $classMap = [
    ];

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setType(string $type)
    {
        $this->type = $type;
    }
}

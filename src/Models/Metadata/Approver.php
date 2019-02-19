<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class Approver
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $name
 * @property string|null $type
 */
class Approver
{
    public static $classMap = [
    ];

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setType(NextOwnerType $type)
    {
        $this->type = $type->getValue();
    }
}

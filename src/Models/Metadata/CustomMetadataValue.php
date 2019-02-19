<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CustomMetadataValue
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $field
 * @property mixed|null $value
 */
class CustomMetadataValue
{
    public static $classMap = [
    ];

    public function setField(string $field)
    {
        $this->field = $field;
    }

    public function setValue(mixed $value)
    {
        $this->value = $value;
    }
}

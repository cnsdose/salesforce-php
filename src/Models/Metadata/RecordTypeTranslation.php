<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class RecordTypeTranslation
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $description
 * @property string|null $label
 * @property string|null $name
 */
class RecordTypeTranslation
{
    public static $classMap = [
    ];

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }
}

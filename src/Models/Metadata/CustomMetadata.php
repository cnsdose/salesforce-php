<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CustomMetadata
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $description
 * @property string|null $label
 * @property bool|null $protected
 * @property CustomMetadataValue[]|null $values
 */
class CustomMetadata extends Metadata
{
    public static $classMap = [
        'values' => [
            'multiple' => true,
            'type' => CustomMetadataValue::class,
        ],
    ];

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setProtected(bool $protected)
    {
        $this->protected = $protected;
    }

    public function setValues(array $values)
    {
        $this->values = $values;
    }
}

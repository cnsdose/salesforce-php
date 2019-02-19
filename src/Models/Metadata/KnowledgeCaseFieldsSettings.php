<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class KnowledgeCaseFieldsSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property KnowledgeCaseField[]|null $field
 */
class KnowledgeCaseFieldsSettings
{
    public static $classMap = [
        'field' => [
            'multiple' => true,
            'type' => KnowledgeCaseField::class,
        ],
    ];

    public function setField(array $field)
    {
        $this->field = $field;
    }
}

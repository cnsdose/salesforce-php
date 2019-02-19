<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class KnowledgeWorkOrderLineItemFieldsSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property KnowledgeWorkOrderLineItemField[]|null $field
 */
class KnowledgeWorkOrderLineItemFieldsSettings
{
    public static $classMap = [
        'field' => [
            'multiple' => true,
            'type' => KnowledgeWorkOrderLineItemField::class,
        ],
    ];

    public function setField(array $field)
    {
        $this->field = $field;
    }
}

<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class KnowledgeWorkOrderFieldsSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property KnowledgeWorkOrderField[]|null $field
 */
class KnowledgeWorkOrderFieldsSettings
{
    public static $classMap = [
        'field' => [
            'multiple' => true,
            'type' => KnowledgeWorkOrderField::class,
        ],
    ];

    public function setField(array $field)
    {
        $this->field = $field;
    }
}

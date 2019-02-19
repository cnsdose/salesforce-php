<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class KnowledgeSuggestedArticlesSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property KnowledgeCaseFieldsSettings|null $caseFields
 * @property bool|null $useSuggestedArticlesForCase
 * @property KnowledgeWorkOrderFieldsSettings|null $workOrderFields
 * @property KnowledgeWorkOrderLineItemFieldsSettings|null $workOrderLineItemFields
 */
class KnowledgeSuggestedArticlesSettings
{
    public static $classMap = [
        'caseFields' => [
            'multiple' => false,
            'type' => KnowledgeCaseFieldsSettings::class,
        ],
        'workOrderFields' => [
            'multiple' => false,
            'type' => KnowledgeWorkOrderFieldsSettings::class,
        ],
        'workOrderLineItemFields' => [
            'multiple' => false,
            'type' => KnowledgeWorkOrderLineItemFieldsSettings::class,
        ],
    ];

    public function setCaseFields(KnowledgeCaseFieldsSettings $caseFields)
    {
        $this->caseFields = $caseFields;
    }

    public function setUseSuggestedArticlesForCase(bool $useSuggestedArticlesForCase)
    {
        $this->useSuggestedArticlesForCase = $useSuggestedArticlesForCase;
    }

    public function setWorkOrderFields(KnowledgeWorkOrderFieldsSettings $workOrderFields)
    {
        $this->workOrderFields = $workOrderFields;
    }

    public function setWorkOrderLineItemFields(KnowledgeWorkOrderLineItemFieldsSettings $workOrderLineItemFields)
    {
        $this->workOrderLineItemFields = $workOrderLineItemFields;
    }
}

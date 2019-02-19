<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CustomObjectTranslation
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property ObjectNameCaseValue[]|null $caseValues
 * @property FieldSetTranslation[]|null $fieldSets
 * @property CustomFieldTranslation[]|null $fields
 * @property string|null $gender
 * @property LayoutTranslation[]|null $layouts
 * @property string|null $nameFieldLabel
 * @property QuickActionTranslation[]|null $quickActions
 * @property RecordTypeTranslation[]|null $recordTypes
 * @property SharingReasonTranslation[]|null $sharingReasons
 * @property StandardFieldTranslation[]|null $standardFields
 * @property string|null $startsWith
 * @property ValidationRuleTranslation[]|null $validationRules
 * @property WebLinkTranslation[]|null $webLinks
 * @property WorkflowTaskTranslation[]|null $workflowTasks
 */
class CustomObjectTranslation extends Metadata
{
    public static $classMap = [
        'caseValues' => [
            'multiple' => true,
            'type' => ObjectNameCaseValue::class,
        ],
        'fieldSets' => [
            'multiple' => true,
            'type' => FieldSetTranslation::class,
        ],
        'fields' => [
            'multiple' => true,
            'type' => CustomFieldTranslation::class,
        ],
        'layouts' => [
            'multiple' => true,
            'type' => LayoutTranslation::class,
        ],
        'quickActions' => [
            'multiple' => true,
            'type' => QuickActionTranslation::class,
        ],
        'recordTypes' => [
            'multiple' => true,
            'type' => RecordTypeTranslation::class,
        ],
        'sharingReasons' => [
            'multiple' => true,
            'type' => SharingReasonTranslation::class,
        ],
        'standardFields' => [
            'multiple' => true,
            'type' => StandardFieldTranslation::class,
        ],
        'validationRules' => [
            'multiple' => true,
            'type' => ValidationRuleTranslation::class,
        ],
        'webLinks' => [
            'multiple' => true,
            'type' => WebLinkTranslation::class,
        ],
        'workflowTasks' => [
            'multiple' => true,
            'type' => WorkflowTaskTranslation::class,
        ],
    ];

    public function setCaseValues(array $caseValues)
    {
        $this->caseValues = $caseValues;
    }

    public function setFieldSets(array $fieldSets)
    {
        $this->fieldSets = $fieldSets;
    }

    public function setFields(array $fields)
    {
        $this->fields = $fields;
    }

    public function setGender(Gender $gender)
    {
        $this->gender = $gender->getValue();
    }

    public function setLayouts(array $layouts)
    {
        $this->layouts = $layouts;
    }

    public function setNameFieldLabel(string $nameFieldLabel)
    {
        $this->nameFieldLabel = $nameFieldLabel;
    }

    public function setQuickActions(array $quickActions)
    {
        $this->quickActions = $quickActions;
    }

    public function setRecordTypes(array $recordTypes)
    {
        $this->recordTypes = $recordTypes;
    }

    public function setSharingReasons(array $sharingReasons)
    {
        $this->sharingReasons = $sharingReasons;
    }

    public function setStandardFields(array $standardFields)
    {
        $this->standardFields = $standardFields;
    }

    public function setStartsWith(StartsWith $startsWith)
    {
        $this->startsWith = $startsWith->getValue();
    }

    public function setValidationRules(array $validationRules)
    {
        $this->validationRules = $validationRules;
    }

    public function setWebLinks(array $webLinks)
    {
        $this->webLinks = $webLinks;
    }

    public function setWorkflowTasks(array $workflowTasks)
    {
        $this->workflowTasks = $workflowTasks;
    }
}

<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class PathAssistant
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $active
 * @property string|null $entityName
 * @property string|null $fieldName
 * @property string|null $masterLabel
 * @property PathAssistantStep[]|null $pathAssistantSteps
 * @property string|null $recordTypeName
 */
class PathAssistant extends Metadata
{
    public static $classMap = [
        'pathAssistantSteps' => [
            'multiple' => true,
            'type' => PathAssistantStep::class,
        ],
    ];

    public function setActive(bool $active)
    {
        $this->active = $active;
    }

    public function setEntityName(string $entityName)
    {
        $this->entityName = $entityName;
    }

    public function setFieldName(string $fieldName)
    {
        $this->fieldName = $fieldName;
    }

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }

    public function setPathAssistantSteps(array $pathAssistantSteps)
    {
        $this->pathAssistantSteps = $pathAssistantSteps;
    }

    public function setRecordTypeName(string $recordTypeName)
    {
        $this->recordTypeName = $recordTypeName;
    }
}

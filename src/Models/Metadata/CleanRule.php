<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CleanRule
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $bulkEnabled
 * @property bool|null $bypassTriggers
 * @property bool|null $bypassWorkflow
 * @property string|null $description
 * @property string|null $developerName
 * @property FieldMapping[]|null $fieldMappings
 * @property string|null $masterLabel
 * @property string|null $matchRule
 * @property string|null $sourceSobjectType
 * @property string|null $status
 * @property string|null $targetSobjectType
 */
class CleanRule
{
    public static $classMap = [
        'fieldMappings' => [
            'multiple' => true,
            'type' => FieldMapping::class,
        ],
    ];

    public function setBulkEnabled(bool $bulkEnabled)
    {
        $this->bulkEnabled = $bulkEnabled;
    }

    public function setBypassTriggers(bool $bypassTriggers)
    {
        $this->bypassTriggers = $bypassTriggers;
    }

    public function setBypassWorkflow(bool $bypassWorkflow)
    {
        $this->bypassWorkflow = $bypassWorkflow;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setDeveloperName(string $developerName)
    {
        $this->developerName = $developerName;
    }

    public function setFieldMappings(array $fieldMappings)
    {
        $this->fieldMappings = $fieldMappings;
    }

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }

    public function setMatchRule(string $matchRule)
    {
        $this->matchRule = $matchRule;
    }

    public function setSourceSobjectType(string $sourceSobjectType)
    {
        $this->sourceSobjectType = $sourceSobjectType;
    }

    public function setStatus(CleanRuleStatus $status)
    {
        $this->status = $status->getValue();
    }

    public function setTargetSobjectType(string $targetSobjectType)
    {
        $this->targetSobjectType = $targetSobjectType;
    }
}

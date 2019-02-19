<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class DuplicateRule
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $actionOnInsert
 * @property string|null $actionOnUpdate
 * @property string|null $alertText
 * @property string|null $description
 * @property DuplicateRuleFilter|null $duplicateRuleFilter
 * @property DuplicateRuleMatchRule[]|null $duplicateRuleMatchRules
 * @property bool|null $isActive
 * @property string|null $masterLabel
 * @property string[]|null $operationsOnInsert
 * @property string[]|null $operationsOnUpdate
 * @property string|null $securityOption
 * @property int|null $sortOrder
 */
class DuplicateRule extends Metadata
{
    public static $classMap = [
        'duplicateRuleFilter' => [
            'multiple' => false,
            'type' => DuplicateRuleFilter::class,
        ],
        'duplicateRuleMatchRules' => [
            'multiple' => true,
            'type' => DuplicateRuleMatchRule::class,
        ],
    ];

    public function setActionOnInsert(DupeActionType $actionOnInsert)
    {
        $this->actionOnInsert = $actionOnInsert->getValue();
    }

    public function setActionOnUpdate(DupeActionType $actionOnUpdate)
    {
        $this->actionOnUpdate = $actionOnUpdate->getValue();
    }

    public function setAlertText(string $alertText)
    {
        $this->alertText = $alertText;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setDuplicateRuleFilter(DuplicateRuleFilter $duplicateRuleFilter)
    {
        $this->duplicateRuleFilter = $duplicateRuleFilter;
    }

    public function setDuplicateRuleMatchRules(array $duplicateRuleMatchRules)
    {
        $this->duplicateRuleMatchRules = $duplicateRuleMatchRules;
    }

    public function setIsActive(bool $isActive)
    {
        $this->isActive = $isActive;
    }

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }

    public function setOperationsOnInsert(array $operationsOnInsert)
    {
        $this->operationsOnInsert = $operationsOnInsert;
    }

    public function setOperationsOnUpdate(array $operationsOnUpdate)
    {
        $this->operationsOnUpdate = $operationsOnUpdate;
    }

    public function setSecurityOption(DupeSecurityOptionType $securityOption)
    {
        $this->securityOption = $securityOption->getValue();
    }

    public function setSortOrder(int $sortOrder)
    {
        $this->sortOrder = $sortOrder;
    }
}

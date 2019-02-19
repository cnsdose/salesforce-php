<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class Territory2
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $accountAccessLevel
 * @property string|null $caseAccessLevel
 * @property string|null $contactAccessLevel
 * @property FieldValue[]|null $customFields
 * @property string|null $description
 * @property string|null $name
 * @property string|null $opportunityAccessLevel
 * @property string|null $parentTerritory
 * @property Territory2RuleAssociation[]|null $ruleAssociations
 * @property string|null $territory2Type
 */
class Territory2 extends Metadata
{
    public static $classMap = [
        'customFields' => [
            'multiple' => true,
            'type' => FieldValue::class,
        ],
        'ruleAssociations' => [
            'multiple' => true,
            'type' => Territory2RuleAssociation::class,
        ],
    ];

    public function setAccountAccessLevel(string $accountAccessLevel)
    {
        $this->accountAccessLevel = $accountAccessLevel;
    }

    public function setCaseAccessLevel(string $caseAccessLevel)
    {
        $this->caseAccessLevel = $caseAccessLevel;
    }

    public function setContactAccessLevel(string $contactAccessLevel)
    {
        $this->contactAccessLevel = $contactAccessLevel;
    }

    public function setCustomFields(array $customFields)
    {
        $this->customFields = $customFields;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setOpportunityAccessLevel(string $opportunityAccessLevel)
    {
        $this->opportunityAccessLevel = $opportunityAccessLevel;
    }

    public function setParentTerritory(string $parentTerritory)
    {
        $this->parentTerritory = $parentTerritory;
    }

    public function setRuleAssociations(array $ruleAssociations)
    {
        $this->ruleAssociations = $ruleAssociations;
    }

    public function setTerritory2Type(string $territory2Type)
    {
        $this->territory2Type = $territory2Type;
    }
}

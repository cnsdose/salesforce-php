<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CustomFieldTranslation
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property ObjectNameCaseValue[]|null $caseValues
 * @property string|null $gender
 * @property string|null $help
 * @property string|null $label
 * @property LookupFilterTranslation|null $lookupFilter
 * @property string|null $name
 * @property PicklistValueTranslation[]|null $picklistValues
 * @property string|null $relationshipLabel
 * @property string|null $startsWith
 */
class CustomFieldTranslation
{
    public static $classMap = [
        'caseValues' => [
            'multiple' => true,
            'type' => ObjectNameCaseValue::class,
        ],
        'lookupFilter' => [
            'multiple' => false,
            'type' => LookupFilterTranslation::class,
        ],
        'picklistValues' => [
            'multiple' => true,
            'type' => PicklistValueTranslation::class,
        ],
    ];

    public function setCaseValues(array $caseValues)
    {
        $this->caseValues = $caseValues;
    }

    public function setGender(Gender $gender)
    {
        $this->gender = $gender->getValue();
    }

    public function setHelp(string $help)
    {
        $this->help = $help;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setLookupFilter(LookupFilterTranslation $lookupFilter)
    {
        $this->lookupFilter = $lookupFilter;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setPicklistValues(array $picklistValues)
    {
        $this->picklistValues = $picklistValues;
    }

    public function setRelationshipLabel(string $relationshipLabel)
    {
        $this->relationshipLabel = $relationshipLabel;
    }

    public function setStartsWith(StartsWith $startsWith)
    {
        $this->startsWith = $startsWith->getValue();
    }
}

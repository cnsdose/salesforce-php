<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class AccountRelationshipShareRule
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $accessLevel
 * @property string|null $accountToCriteriaField
 * @property string|null $description
 * @property string|null $entityType
 * @property string|null $masterLabel
 * @property string|null $staticFormulaCriteria
 * @property string|null $type
 */
class AccountRelationshipShareRule extends Metadata
{
    public static $classMap = [
    ];

    public function setAccessLevel(string $accessLevel)
    {
        $this->accessLevel = $accessLevel;
    }

    public function setAccountToCriteriaField(string $accountToCriteriaField)
    {
        $this->accountToCriteriaField = $accountToCriteriaField;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setEntityType(string $entityType)
    {
        $this->entityType = $entityType;
    }

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }

    public function setStaticFormulaCriteria(string $staticFormulaCriteria)
    {
        $this->staticFormulaCriteria = $staticFormulaCriteria;
    }

    public function setType(string $type)
    {
        $this->type = $type;
    }
}

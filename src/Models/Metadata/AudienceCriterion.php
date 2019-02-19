<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class AudienceCriterion
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property int|null $criteriaNumber
 * @property AudienceCriteriaValue|null $criterionValue
 * @property string|null $operator
 * @property string|null $type
 */
class AudienceCriterion
{
    public static $classMap = [
        'criterionValue' => [
            'multiple' => false,
            'type' => AudienceCriteriaValue::class,
        ],
    ];

    public function setCriteriaNumber(int $criteriaNumber)
    {
        $this->criteriaNumber = $criteriaNumber;
    }

    public function setCriterionValue(AudienceCriteriaValue $criterionValue)
    {
        $this->criterionValue = $criterionValue;
    }

    public function setOperator(AudienceCriterionOperator $operator)
    {
        $this->operator = $operator->getValue();
    }

    public function setType(AudienceCriterionType $type)
    {
        $this->type = $type->getValue();
    }
}

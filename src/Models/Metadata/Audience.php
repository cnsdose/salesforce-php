<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class Audience
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $audienceName
 * @property string|null $container
 * @property AudienceCriteria|null $criteria
 * @property string|null $description
 * @property string|null $formula
 * @property string|null $formulaFilterType
 * @property PersonalizationTargetInfos|null $targets
 */
class Audience extends Metadata
{
    public static $classMap = [
        'criteria' => [
            'multiple' => false,
            'type' => AudienceCriteria::class,
        ],
        'targets' => [
            'multiple' => false,
            'type' => PersonalizationTargetInfos::class,
        ],
    ];

    public function setAudienceName(string $audienceName)
    {
        $this->audienceName = $audienceName;
    }

    public function setContainer(string $container)
    {
        $this->container = $container;
    }

    public function setCriteria(AudienceCriteria $criteria)
    {
        $this->criteria = $criteria;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setFormula(string $formula)
    {
        $this->formula = $formula;
    }

    public function setFormulaFilterType(FormulaFilterType $formulaFilterType)
    {
        $this->formulaFilterType = $formulaFilterType->getValue();
    }

    public function setTargets(PersonalizationTargetInfos $targets)
    {
        $this->targets = $targets;
    }
}

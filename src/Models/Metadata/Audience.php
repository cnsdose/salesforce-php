<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class Audience
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $audienceName
 * @property string|null $container
 * @property AudienceCriterion[]|null $criterion
 * @property string|null $description
 * @property string|null $formula
 * @property string|null $formulaFilterType
 * @property bool|null $isProtected
 */
class Audience extends Metadata
{
    public static $classMap = [
        'criterion' => [
            'multiple' => true,
            'type' => AudienceCriterion::class,
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

    public function setCriterion(array $criterion)
    {
        $this->criterion = $criterion;
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

    public function setIsProtected(bool $isProtected)
    {
        $this->isProtected = $isProtected;
    }
}

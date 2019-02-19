<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class RecommendationStrategy
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property StrategyAction[]|null $actionContext
 * @property string|null $contextRecordType
 * @property string|null $description
 * @property StrategyNodeFilter[]|null $filter
 * @property StrategyNodeIf[]|null $if
 * @property string|null $label
 * @property StrategyNodeExclusive[]|null $mutuallyExclusive
 * @property string|null $onBehalfOfExpression
 * @property StrategyNodeRecommendationLimit[]|null $recommendationLimit
 * @property StrategyNodeRecommendationLoad[]|null $recommendationLoad
 * @property StrategyNodeSort[]|null $sort
 * @property StrategyNodeUnion[]|null $union
 */
class RecommendationStrategy extends Metadata
{
    public static $classMap = [
        'actionContext' => [
            'multiple' => true,
            'type' => StrategyAction::class,
        ],
        'filter' => [
            'multiple' => true,
            'type' => StrategyNodeFilter::class,
        ],
        'if' => [
            'multiple' => true,
            'type' => StrategyNodeIf::class,
        ],
        'mutuallyExclusive' => [
            'multiple' => true,
            'type' => StrategyNodeExclusive::class,
        ],
        'recommendationLimit' => [
            'multiple' => true,
            'type' => StrategyNodeRecommendationLimit::class,
        ],
        'recommendationLoad' => [
            'multiple' => true,
            'type' => StrategyNodeRecommendationLoad::class,
        ],
        'sort' => [
            'multiple' => true,
            'type' => StrategyNodeSort::class,
        ],
        'union' => [
            'multiple' => true,
            'type' => StrategyNodeUnion::class,
        ],
    ];

    public function setActionContext(array $actionContext)
    {
        $this->actionContext = $actionContext;
    }

    public function setContextRecordType(string $contextRecordType)
    {
        $this->contextRecordType = $contextRecordType;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setFilter(array $filter)
    {
        $this->filter = $filter;
    }

    public function setIf(array $if)
    {
        $this->if = $if;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setMutuallyExclusive(array $mutuallyExclusive)
    {
        $this->mutuallyExclusive = $mutuallyExclusive;
    }

    public function setOnBehalfOfExpression(string $onBehalfOfExpression)
    {
        $this->onBehalfOfExpression = $onBehalfOfExpression;
    }

    public function setRecommendationLimit(array $recommendationLimit)
    {
        $this->recommendationLimit = $recommendationLimit;
    }

    public function setRecommendationLoad(array $recommendationLoad)
    {
        $this->recommendationLoad = $recommendationLoad;
    }

    public function setSort(array $sort)
    {
        $this->sort = $sort;
    }

    public function setUnion(array $union)
    {
        $this->union = $union;
    }
}

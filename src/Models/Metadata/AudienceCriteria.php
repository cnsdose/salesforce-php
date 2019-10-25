<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class AudienceCriteria
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property AudienceCriterion[]|null $criterion
 */
class AudienceCriteria
{
    public static $classMap = [
        'criterion' => [
            'multiple' => true,
            'type' => AudienceCriterion::class,
        ],
    ];

    public function setCriterion(array $criterion)
    {
        $this->criterion = $criterion;
    }
}

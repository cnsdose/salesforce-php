<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class PersonalizationTargetInfos
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property PersonalizationTargetInfo[]|null $target
 */
class PersonalizationTargetInfos
{
    public static $classMap = [
        'target' => [
            'multiple' => true,
            'type' => PersonalizationTargetInfo::class,
        ],
    ];

    public function setTarget(array $target)
    {
        $this->target = $target;
    }
}

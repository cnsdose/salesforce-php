<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class PersonalizationTargetInfo
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $groupName
 * @property int|null $priority
 * @property string|null $targetType
 * @property string|null $targetValue
 */
class PersonalizationTargetInfo
{
    public static $classMap = [
    ];

    public function setGroupName(string $groupName)
    {
        $this->groupName = $groupName;
    }

    public function setPriority(int $priority)
    {
        $this->priority = $priority;
    }

    public function setTargetType(string $targetType)
    {
        $this->targetType = $targetType;
    }

    public function setTargetValue(string $targetValue)
    {
        $this->targetValue = $targetValue;
    }
}

<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ManagedTopic
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $managedTopicType
 * @property string|null $name
 * @property string|null $parentName
 * @property int|null $position
 * @property string|null $topicDescription
 */
class ManagedTopic extends Metadata
{
    public static $classMap = [
    ];

    public function setManagedTopicType(string $managedTopicType)
    {
        $this->managedTopicType = $managedTopicType;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setParentName(string $parentName)
    {
        $this->parentName = $parentName;
    }

    public function setPosition(int $position)
    {
        $this->position = $position;
    }

    public function setTopicDescription(string $topicDescription)
    {
        $this->topicDescription = $topicDescription;
    }
}

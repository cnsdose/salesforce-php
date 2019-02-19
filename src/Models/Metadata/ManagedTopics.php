<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ManagedTopics
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property ManagedTopic[]|null $managedTopic
 */
class ManagedTopics extends Metadata
{
    public static $classMap = [
        'managedTopic' => [
            'multiple' => true,
            'type' => ManagedTopic::class,
        ],
    ];

    public function setManagedTopic(array $managedTopic)
    {
        $this->managedTopic = $managedTopic;
    }
}

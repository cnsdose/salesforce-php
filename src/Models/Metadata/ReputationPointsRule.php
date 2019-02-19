<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ReputationPointsRule
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $eventType
 * @property int|null $points
 */
class ReputationPointsRule
{
    public static $classMap = [
    ];

    public function setEventType(string $eventType)
    {
        $this->eventType = $eventType;
    }

    public function setPoints(int $points)
    {
        $this->points = $points;
    }
}

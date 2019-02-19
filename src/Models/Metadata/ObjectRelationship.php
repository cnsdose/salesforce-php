<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ObjectRelationship
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property ObjectRelationship|null $join
 * @property bool|null $outerJoin
 * @property string|null $relationship
 */
class ObjectRelationship
{
    public static $classMap = [
        'join' => [
            'multiple' => false,
            'type' => ObjectRelationship::class,
        ],
    ];

    public function setJoin(ObjectRelationship $join)
    {
        $this->join = $join;
    }

    public function setOuterJoin(bool $outerJoin)
    {
        $this->outerJoin = $outerJoin;
    }

    public function setRelationship(string $relationship)
    {
        $this->relationship = $relationship;
    }
}

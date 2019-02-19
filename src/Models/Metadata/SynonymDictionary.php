<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class SynonymDictionary
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property SynonymGroup[]|null $groups
 * @property bool|null $isProtected
 * @property string|null $label
 */
class SynonymDictionary extends Metadata
{
    public static $classMap = [
        'groups' => [
            'multiple' => true,
            'type' => SynonymGroup::class,
        ],
    ];

    public function setGroups(array $groups)
    {
        $this->groups = $groups;
    }

    public function setIsProtected(bool $isProtected)
    {
        $this->isProtected = $isProtected;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }
}

<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class MlSlotClassValue
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property SynonymGroup|null $synonymGroup
 * @property string|null $value
 */
class MlSlotClassValue
{
    public static $classMap = [
        'synonymGroup' => [
            'multiple' => false,
            'type' => SynonymGroup::class,
        ],
    ];

    public function setSynonymGroup(SynonymGroup $synonymGroup)
    {
        $this->synonymGroup = $synonymGroup;
    }

    public function setValue(string $value)
    {
        $this->value = $value;
    }
}

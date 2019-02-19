<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class LocalMlDomain
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $label
 * @property MlIntent[]|null $mlIntents
 * @property MlSlotClass[]|null $mlSlotClasses
 * @property string|null $name
 */
class LocalMlDomain
{
    public static $classMap = [
        'mlIntents' => [
            'multiple' => true,
            'type' => MlIntent::class,
        ],
        'mlSlotClasses' => [
            'multiple' => true,
            'type' => MlSlotClass::class,
        ],
    ];

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setMlIntents(array $mlIntents)
    {
        $this->mlIntents = $mlIntents;
    }

    public function setMlSlotClasses(array $mlSlotClasses)
    {
        $this->mlSlotClasses = $mlSlotClasses;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }
}

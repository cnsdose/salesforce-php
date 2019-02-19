<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class MlDomain
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $description
 * @property string|null $label
 * @property MlIntent[]|null $mlIntents
 * @property MlSlotClass[]|null $mlSlotClasses
 */
class MlDomain extends Metadata
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

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

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
}

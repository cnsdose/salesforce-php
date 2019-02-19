<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FlowTranslation
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property FlowChoiceTranslation[]|null $choices
 * @property string|null $fullName
 * @property string|null $label
 * @property FlowScreenTranslation[]|null $screens
 * @property FlowStageTranslation[]|null $stages
 * @property FlowTextTemplateTranslation[]|null $textTemplates
 */
class FlowTranslation
{
    public static $classMap = [
        'choices' => [
            'multiple' => true,
            'type' => FlowChoiceTranslation::class,
        ],
        'screens' => [
            'multiple' => true,
            'type' => FlowScreenTranslation::class,
        ],
        'stages' => [
            'multiple' => true,
            'type' => FlowStageTranslation::class,
        ],
        'textTemplates' => [
            'multiple' => true,
            'type' => FlowTextTemplateTranslation::class,
        ],
    ];

    public function setChoices(array $choices)
    {
        $this->choices = $choices;
    }

    public function setFullName(string $fullName)
    {
        $this->fullName = $fullName;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setScreens(array $screens)
    {
        $this->screens = $screens;
    }

    public function setStages(array $stages)
    {
        $this->stages = $stages;
    }

    public function setTextTemplates(array $textTemplates)
    {
        $this->textTemplates = $textTemplates;
    }
}

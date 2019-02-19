<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class MlIntent
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $description
 * @property string|null $developerName
 * @property string|null $label
 * @property MlIntentUtterance[]|null $mlIntentUtterances
 * @property MlRelatedIntent[]|null $relatedMlIntents
 */
class MlIntent
{
    public static $classMap = [
        'mlIntentUtterances' => [
            'multiple' => true,
            'type' => MlIntentUtterance::class,
        ],
        'relatedMlIntents' => [
            'multiple' => true,
            'type' => MlRelatedIntent::class,
        ],
    ];

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setDeveloperName(string $developerName)
    {
        $this->developerName = $developerName;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setMlIntentUtterances(array $mlIntentUtterances)
    {
        $this->mlIntentUtterances = $mlIntentUtterances;
    }

    public function setRelatedMlIntents(array $relatedMlIntents)
    {
        $this->relatedMlIntents = $relatedMlIntents;
    }
}

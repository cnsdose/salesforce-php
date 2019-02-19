<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class VisualizationPlugin
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $description
 * @property string|null $developerName
 * @property string|null $icon
 * @property string|null $masterLabel
 * @property VisualizationResource[]|null $visualizationResources
 * @property VisualizationType[]|null $visualizationTypes
 */
class VisualizationPlugin extends Metadata
{
    public static $classMap = [
        'visualizationResources' => [
            'multiple' => true,
            'type' => VisualizationResource::class,
        ],
        'visualizationTypes' => [
            'multiple' => true,
            'type' => VisualizationType::class,
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

    public function setIcon(string $icon)
    {
        $this->icon = $icon;
    }

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }

    public function setVisualizationResources(array $visualizationResources)
    {
        $this->visualizationResources = $visualizationResources;
    }

    public function setVisualizationTypes(array $visualizationTypes)
    {
        $this->visualizationTypes = $visualizationTypes;
    }
}

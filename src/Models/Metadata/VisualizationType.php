<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class VisualizationType
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $description
 * @property string|null $developerName
 * @property string|null $icon
 * @property string|null $masterLabel
 * @property string|null $scriptBootstrapMethod
 */
class VisualizationType
{
    public static $classMap = [
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

    public function setScriptBootstrapMethod(string $scriptBootstrapMethod)
    {
        $this->scriptBootstrapMethod = $scriptBootstrapMethod;
    }
}

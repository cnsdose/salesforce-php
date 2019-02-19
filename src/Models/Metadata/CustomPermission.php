<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CustomPermission
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $connectedApp
 * @property string|null $description
 * @property string|null $label
 * @property CustomPermissionDependencyRequired[]|null $requiredPermission
 */
class CustomPermission extends Metadata
{
    public static $classMap = [
        'requiredPermission' => [
            'multiple' => true,
            'type' => CustomPermissionDependencyRequired::class,
        ],
    ];

    public function setConnectedApp(string $connectedApp)
    {
        $this->connectedApp = $connectedApp;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setRequiredPermission(array $requiredPermission)
    {
        $this->requiredPermission = $requiredPermission;
    }
}

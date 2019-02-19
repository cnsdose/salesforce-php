<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class deploy
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $ZipFile
 * @property DeployOptions|null $DeployOptions
 */
class deploy
{
    public static $classMap = [
        'DeployOptions' => [
            'multiple' => false,
            'type' => DeployOptions::class,
        ],
    ];

    public function setZipFile(string $ZipFile)
    {
        $this->ZipFile = $ZipFile;
    }

    public function setDeployOptions(DeployOptions $DeployOptions)
    {
        $this->DeployOptions = $DeployOptions;
    }
}

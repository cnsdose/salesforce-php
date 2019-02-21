<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class Deploy
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $ZipFile
 * @property DeployOptions|null $DeployOptions
 */
class Deploy
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

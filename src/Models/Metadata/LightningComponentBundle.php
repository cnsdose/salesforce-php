<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class LightningComponentBundle
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property float|null $apiVersion
 * @property string|null $description
 * @property bool|null $isExplicitImport
 * @property bool|null $isExposed
 * @property LwcResources|null $lwcResources
 * @property string|null $masterLabel
 * @property string|null $targetConfigs
 * @property Targets|null $targets
 */
class LightningComponentBundle extends Metadata
{
    public static $classMap = [
        'lwcResources' => [
            'multiple' => false,
            'type' => LwcResources::class,
        ],
        'targets' => [
            'multiple' => false,
            'type' => Targets::class,
        ],
    ];

    public function setApiVersion(float $apiVersion)
    {
        $this->apiVersion = $apiVersion;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setIsExplicitImport(bool $isExplicitImport)
    {
        $this->isExplicitImport = $isExplicitImport;
    }

    public function setIsExposed(bool $isExposed)
    {
        $this->isExposed = $isExposed;
    }

    public function setLwcResources(LwcResources $lwcResources)
    {
        $this->lwcResources = $lwcResources;
    }

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }

    public function setTargetConfigs(string $targetConfigs)
    {
        $this->targetConfigs = $targetConfigs;
    }

    public function setTargets(Targets $targets)
    {
        $this->targets = $targets;
    }
}

<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class AccessControlPolicy
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $active
 * @property string|null $deploymentStatus
 * @property string|null $description
 * @property string|null $masterLabel
 * @property string|null $targetEntity
 * @property int|null $version
 */
class AccessControlPolicy extends MetadataWithContent
{
    public static $classMap = [
    ];

    public function setActive(bool $active)
    {
        $this->active = $active;
    }

    public function setDeploymentStatus(ACPStatus $deploymentStatus)
    {
        $this->deploymentStatus = $deploymentStatus->getValue();
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }

    public function setTargetEntity(string $targetEntity)
    {
        $this->targetEntity = $targetEntity;
    }

    public function setVersion(int $version)
    {
        $this->version = $version;
    }
}

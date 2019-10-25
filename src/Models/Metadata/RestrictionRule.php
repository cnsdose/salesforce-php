<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class RestrictionRule
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $active
 * @property string|null $description
 * @property string|null $enforcementType
 * @property string|null $masterLabel
 * @property string|null $recordFilter
 * @property string|null $targetEntity
 * @property string|null $userCriteria
 * @property int|null $version
 */
class RestrictionRule extends Metadata
{
    public static $classMap = [
    ];

    public function setActive(bool $active)
    {
        $this->active = $active;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setEnforcementType(EnforcementType $enforcementType)
    {
        $this->enforcementType = $enforcementType->getValue();
    }

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }

    public function setRecordFilter(string $recordFilter)
    {
        $this->recordFilter = $recordFilter;
    }

    public function setTargetEntity(string $targetEntity)
    {
        $this->targetEntity = $targetEntity;
    }

    public function setUserCriteria(string $userCriteria)
    {
        $this->userCriteria = $userCriteria;
    }

    public function setVersion(int $version)
    {
        $this->version = $version;
    }
}

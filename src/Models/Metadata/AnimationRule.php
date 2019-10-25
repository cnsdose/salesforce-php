<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class AnimationRule
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $animationFrequency
 * @property string|null $developerName
 * @property bool|null $isActive
 * @property string|null $masterLabel
 * @property string|null $recordTypeContext
 * @property string|null $recordTypeName
 * @property string|null $sobjectType
 * @property string|null $targetField
 * @property string|null $targetFieldChangeToValues
 */
class AnimationRule extends Metadata
{
    public static $classMap = [
    ];

    public function setAnimationFrequency(string $animationFrequency)
    {
        $this->animationFrequency = $animationFrequency;
    }

    public function setDeveloperName(string $developerName)
    {
        $this->developerName = $developerName;
    }

    public function setIsActive(bool $isActive)
    {
        $this->isActive = $isActive;
    }

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }

    public function setRecordTypeContext(string $recordTypeContext)
    {
        $this->recordTypeContext = $recordTypeContext;
    }

    public function setRecordTypeName(string $recordTypeName)
    {
        $this->recordTypeName = $recordTypeName;
    }

    public function setSobjectType(string $sobjectType)
    {
        $this->sobjectType = $sobjectType;
    }

    public function setTargetField(string $targetField)
    {
        $this->targetField = $targetField;
    }

    public function setTargetFieldChangeToValues(string $targetFieldChangeToValues)
    {
        $this->targetFieldChangeToValues = $targetFieldChangeToValues;
    }
}

<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class UIObjectRelationConfig
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property UIObjectRelationFieldConfig[]|null $UIObjectRelationFieldConfigs
 * @property string|null $contextObject
 * @property string|null $contextObjectRecordType
 * @property string|null $directRelationshipField
 * @property string|null $indirectObjectContextField
 * @property string|null $indirectObjectRelatedField
 * @property string|null $indirectRelationshipObject
 * @property bool|null $isActive
 * @property string|null $masterLabel
 * @property string|null $relatedObject
 * @property string|null $relatedObjectRecordType
 * @property string|null $relationshipType
 */
class UIObjectRelationConfig extends Metadata
{
    public static $classMap = [
        'UIObjectRelationFieldConfigs' => [
            'multiple' => true,
            'type' => UIObjectRelationFieldConfig::class,
        ],
    ];

    public function setUIObjectRelationFieldConfigs(array $UIObjectRelationFieldConfigs)
    {
        $this->UIObjectRelationFieldConfigs = $UIObjectRelationFieldConfigs;
    }

    public function setContextObject(string $contextObject)
    {
        $this->contextObject = $contextObject;
    }

    public function setContextObjectRecordType(string $contextObjectRecordType)
    {
        $this->contextObjectRecordType = $contextObjectRecordType;
    }

    public function setDirectRelationshipField(string $directRelationshipField)
    {
        $this->directRelationshipField = $directRelationshipField;
    }

    public function setIndirectObjectContextField(string $indirectObjectContextField)
    {
        $this->indirectObjectContextField = $indirectObjectContextField;
    }

    public function setIndirectObjectRelatedField(string $indirectObjectRelatedField)
    {
        $this->indirectObjectRelatedField = $indirectObjectRelatedField;
    }

    public function setIndirectRelationshipObject(string $indirectRelationshipObject)
    {
        $this->indirectRelationshipObject = $indirectRelationshipObject;
    }

    public function setIsActive(bool $isActive)
    {
        $this->isActive = $isActive;
    }

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }

    public function setRelatedObject(string $relatedObject)
    {
        $this->relatedObject = $relatedObject;
    }

    public function setRelatedObjectRecordType(string $relatedObjectRecordType)
    {
        $this->relatedObjectRecordType = $relatedObjectRecordType;
    }

    public function setRelationshipType(ObjectRelationshipType $relationshipType)
    {
        $this->relationshipType = $relationshipType->getValue();
    }
}

<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class DescribeValueTypeResult
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $apiCreatable
 * @property bool|null $apiDeletable
 * @property bool|null $apiReadable
 * @property bool|null $apiUpdatable
 * @property ValueTypeField|null $parentField
 * @property ValueTypeField[]|null $valueTypeFields
 */
class DescribeValueTypeResult
{
    public static $classMap = [
        'parentField' => [
            'multiple' => false,
            'type' => ValueTypeField::class,
        ],
        'valueTypeFields' => [
            'multiple' => true,
            'type' => ValueTypeField::class,
        ],
    ];

    public function setApiCreatable(bool $apiCreatable)
    {
        $this->apiCreatable = $apiCreatable;
    }

    public function setApiDeletable(bool $apiDeletable)
    {
        $this->apiDeletable = $apiDeletable;
    }

    public function setApiReadable(bool $apiReadable)
    {
        $this->apiReadable = $apiReadable;
    }

    public function setApiUpdatable(bool $apiUpdatable)
    {
        $this->apiUpdatable = $apiUpdatable;
    }

    public function setParentField(ValueTypeField $parentField)
    {
        $this->parentField = $parentField;
    }

    public function setValueTypeFields(array $valueTypeFields)
    {
        $this->valueTypeFields = $valueTypeFields;
    }
}

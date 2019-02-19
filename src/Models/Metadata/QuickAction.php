<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class QuickAction
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $canvas
 * @property string|null $description
 * @property FieldOverride[]|null $fieldOverrides
 * @property string|null $flowDefinition
 * @property int|null $height
 * @property string|null $icon
 * @property bool|null $isProtected
 * @property string|null $label
 * @property string|null $lightningComponent
 * @property bool|null $optionsCreateFeedItem
 * @property string|null $page
 * @property QuickActionLayout|null $quickActionLayout
 * @property QuickActionSendEmailOptions|null $quickActionSendEmailOptions
 * @property string|null $standardLabel
 * @property string|null $successMessage
 * @property string|null $targetObject
 * @property string|null $targetParentField
 * @property string|null $targetRecordType
 * @property string|null $type
 * @property int|null $width
 */
class QuickAction extends Metadata
{
    public static $classMap = [
        'fieldOverrides' => [
            'multiple' => true,
            'type' => FieldOverride::class,
        ],
        'quickActionLayout' => [
            'multiple' => false,
            'type' => QuickActionLayout::class,
        ],
        'quickActionSendEmailOptions' => [
            'multiple' => false,
            'type' => QuickActionSendEmailOptions::class,
        ],
    ];

    public function setCanvas(string $canvas)
    {
        $this->canvas = $canvas;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setFieldOverrides(array $fieldOverrides)
    {
        $this->fieldOverrides = $fieldOverrides;
    }

    public function setFlowDefinition(string $flowDefinition)
    {
        $this->flowDefinition = $flowDefinition;
    }

    public function setHeight(int $height)
    {
        $this->height = $height;
    }

    public function setIcon(string $icon)
    {
        $this->icon = $icon;
    }

    public function setIsProtected(bool $isProtected)
    {
        $this->isProtected = $isProtected;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setLightningComponent(string $lightningComponent)
    {
        $this->lightningComponent = $lightningComponent;
    }

    public function setOptionsCreateFeedItem(bool $optionsCreateFeedItem)
    {
        $this->optionsCreateFeedItem = $optionsCreateFeedItem;
    }

    public function setPage(string $page)
    {
        $this->page = $page;
    }

    public function setQuickActionLayout(QuickActionLayout $quickActionLayout)
    {
        $this->quickActionLayout = $quickActionLayout;
    }

    public function setQuickActionSendEmailOptions(QuickActionSendEmailOptions $quickActionSendEmailOptions)
    {
        $this->quickActionSendEmailOptions = $quickActionSendEmailOptions;
    }

    public function setStandardLabel(QuickActionLabel $standardLabel)
    {
        $this->standardLabel = $standardLabel->getValue();
    }

    public function setSuccessMessage(string $successMessage)
    {
        $this->successMessage = $successMessage;
    }

    public function setTargetObject(string $targetObject)
    {
        $this->targetObject = $targetObject;
    }

    public function setTargetParentField(string $targetParentField)
    {
        $this->targetParentField = $targetParentField;
    }

    public function setTargetRecordType(string $targetRecordType)
    {
        $this->targetRecordType = $targetRecordType;
    }

    public function setType(QuickActionType $type)
    {
        $this->type = $type->getValue();
    }

    public function setWidth(int $width)
    {
        $this->width = $width;
    }
}

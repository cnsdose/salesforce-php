<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class WaveXmdDimension
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property WaveXmdFormattingProperty[]|null $conditionalFormatting
 * @property WaveXmdDimensionCustomAction[]|null $customActions
 * @property bool|null $customActionsEnabled
 * @property string|null $dateFormat
 * @property string|null $description
 * @property string|null $field
 * @property string|null $fullyQualifiedName
 * @property string|null $imageTemplate
 * @property bool|null $isDerived
 * @property bool|null $isMultiValue
 * @property string|null $label
 * @property string|null $linkTemplate
 * @property bool|null $linkTemplateEnabled
 * @property string|null $linkTooltip
 * @property WaveXmdDimensionMember[]|null $members
 * @property string|null $origin
 * @property WaveXmdRecordDisplayLookup[]|null $recordDisplayFields
 * @property string|null $recordIdField
 * @property string|null $recordOrganizationIdField
 * @property WaveXmdDimensionSalesforceAction[]|null $salesforceActions
 * @property bool|null $salesforceActionsEnabled
 * @property int|null $showDetailsDefaultFieldIndex
 * @property bool|null $showInExplorer
 * @property int|null $sortIndex
 */
class WaveXmdDimension
{
    public static $classMap = [
        'conditionalFormatting' => [
            'multiple' => true,
            'type' => WaveXmdFormattingProperty::class,
        ],
        'customActions' => [
            'multiple' => true,
            'type' => WaveXmdDimensionCustomAction::class,
        ],
        'members' => [
            'multiple' => true,
            'type' => WaveXmdDimensionMember::class,
        ],
        'recordDisplayFields' => [
            'multiple' => true,
            'type' => WaveXmdRecordDisplayLookup::class,
        ],
        'salesforceActions' => [
            'multiple' => true,
            'type' => WaveXmdDimensionSalesforceAction::class,
        ],
    ];

    public function setConditionalFormatting(array $conditionalFormatting)
    {
        $this->conditionalFormatting = $conditionalFormatting;
    }

    public function setCustomActions(array $customActions)
    {
        $this->customActions = $customActions;
    }

    public function setCustomActionsEnabled(bool $customActionsEnabled)
    {
        $this->customActionsEnabled = $customActionsEnabled;
    }

    public function setDateFormat(string $dateFormat)
    {
        $this->dateFormat = $dateFormat;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setField(string $field)
    {
        $this->field = $field;
    }

    public function setFullyQualifiedName(string $fullyQualifiedName)
    {
        $this->fullyQualifiedName = $fullyQualifiedName;
    }

    public function setImageTemplate(string $imageTemplate)
    {
        $this->imageTemplate = $imageTemplate;
    }

    public function setIsDerived(bool $isDerived)
    {
        $this->isDerived = $isDerived;
    }

    public function setIsMultiValue(bool $isMultiValue)
    {
        $this->isMultiValue = $isMultiValue;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setLinkTemplate(string $linkTemplate)
    {
        $this->linkTemplate = $linkTemplate;
    }

    public function setLinkTemplateEnabled(bool $linkTemplateEnabled)
    {
        $this->linkTemplateEnabled = $linkTemplateEnabled;
    }

    public function setLinkTooltip(string $linkTooltip)
    {
        $this->linkTooltip = $linkTooltip;
    }

    public function setMembers(array $members)
    {
        $this->members = $members;
    }

    public function setOrigin(string $origin)
    {
        $this->origin = $origin;
    }

    public function setRecordDisplayFields(array $recordDisplayFields)
    {
        $this->recordDisplayFields = $recordDisplayFields;
    }

    public function setRecordIdField(string $recordIdField)
    {
        $this->recordIdField = $recordIdField;
    }

    public function setRecordOrganizationIdField(string $recordOrganizationIdField)
    {
        $this->recordOrganizationIdField = $recordOrganizationIdField;
    }

    public function setSalesforceActions(array $salesforceActions)
    {
        $this->salesforceActions = $salesforceActions;
    }

    public function setSalesforceActionsEnabled(bool $salesforceActionsEnabled)
    {
        $this->salesforceActionsEnabled = $salesforceActionsEnabled;
    }

    public function setShowDetailsDefaultFieldIndex(int $showDetailsDefaultFieldIndex)
    {
        $this->showDetailsDefaultFieldIndex = $showDetailsDefaultFieldIndex;
    }

    public function setShowInExplorer(bool $showInExplorer)
    {
        $this->showInExplorer = $showInExplorer;
    }

    public function setSortIndex(int $sortIndex)
    {
        $this->sortIndex = $sortIndex;
    }
}

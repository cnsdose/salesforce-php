<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class WaveXmdMeasure
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property WaveXmdFormattingProperty[]|null $conditionalFormatting
 * @property string|null $dateFormat
 * @property string|null $description
 * @property string|null $field
 * @property string|null $formatCustomFormat
 * @property int|null $formatDecimalDigits
 * @property bool|null $formatIsNegativeParens
 * @property string|null $formatPrefix
 * @property string|null $formatSuffix
 * @property string|null $formatUnit
 * @property float|null $formatUnitMultiplier
 * @property string|null $fullyQualifiedName
 * @property bool|null $isDerived
 * @property string|null $label
 * @property string|null $origin
 * @property int|null $showDetailsDefaultFieldIndex
 * @property bool|null $showInExplorer
 * @property int|null $sortIndex
 */
class WaveXmdMeasure
{
    public static $classMap = [
        'conditionalFormatting' => [
            'multiple' => true,
            'type' => WaveXmdFormattingProperty::class,
        ],
    ];

    public function setConditionalFormatting(array $conditionalFormatting)
    {
        $this->conditionalFormatting = $conditionalFormatting;
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

    public function setFormatCustomFormat(string $formatCustomFormat)
    {
        $this->formatCustomFormat = $formatCustomFormat;
    }

    public function setFormatDecimalDigits(int $formatDecimalDigits)
    {
        $this->formatDecimalDigits = $formatDecimalDigits;
    }

    public function setFormatIsNegativeParens(bool $formatIsNegativeParens)
    {
        $this->formatIsNegativeParens = $formatIsNegativeParens;
    }

    public function setFormatPrefix(string $formatPrefix)
    {
        $this->formatPrefix = $formatPrefix;
    }

    public function setFormatSuffix(string $formatSuffix)
    {
        $this->formatSuffix = $formatSuffix;
    }

    public function setFormatUnit(string $formatUnit)
    {
        $this->formatUnit = $formatUnit;
    }

    public function setFormatUnitMultiplier(float $formatUnitMultiplier)
    {
        $this->formatUnitMultiplier = $formatUnitMultiplier;
    }

    public function setFullyQualifiedName(string $fullyQualifiedName)
    {
        $this->fullyQualifiedName = $fullyQualifiedName;
    }

    public function setIsDerived(bool $isDerived)
    {
        $this->isDerived = $isDerived;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setOrigin(string $origin)
    {
        $this->origin = $origin;
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

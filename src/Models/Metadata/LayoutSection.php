<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class LayoutSection
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $customLabel
 * @property bool|null $detailHeading
 * @property bool|null $editHeading
 * @property string|null $label
 * @property LayoutColumn[]|null $layoutColumns
 * @property string|null $style
 */
class LayoutSection
{
    public static $classMap = [
        'layoutColumns' => [
            'multiple' => true,
            'type' => LayoutColumn::class,
        ],
    ];

    public function setCustomLabel(bool $customLabel)
    {
        $this->customLabel = $customLabel;
    }

    public function setDetailHeading(bool $detailHeading)
    {
        $this->detailHeading = $detailHeading;
    }

    public function setEditHeading(bool $editHeading)
    {
        $this->editHeading = $editHeading;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setLayoutColumns(array $layoutColumns)
    {
        $this->layoutColumns = $layoutColumns;
    }

    public function setStyle(LayoutSectionStyle $style)
    {
        $this->style = $style->getValue();
    }
}

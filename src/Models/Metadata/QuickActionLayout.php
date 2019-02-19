<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class QuickActionLayout
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $layoutSectionStyle
 * @property QuickActionLayoutColumn[]|null $quickActionLayoutColumns
 */
class QuickActionLayout
{
    public static $classMap = [
        'quickActionLayoutColumns' => [
            'multiple' => true,
            'type' => QuickActionLayoutColumn::class,
        ],
    ];

    public function setLayoutSectionStyle(LayoutSectionStyle $layoutSectionStyle)
    {
        $this->layoutSectionStyle = $layoutSectionStyle->getValue();
    }

    public function setQuickActionLayoutColumns(array $quickActionLayoutColumns)
    {
        $this->quickActionLayoutColumns = $quickActionLayoutColumns;
    }
}

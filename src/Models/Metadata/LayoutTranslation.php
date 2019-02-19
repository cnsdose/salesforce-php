<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class LayoutTranslation
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $layout
 * @property string|null $layoutType
 * @property LayoutSectionTranslation[]|null $sections
 */
class LayoutTranslation
{
    public static $classMap = [
        'sections' => [
            'multiple' => true,
            'type' => LayoutSectionTranslation::class,
        ],
    ];

    public function setLayout(string $layout)
    {
        $this->layout = $layout;
    }

    public function setLayoutType(string $layoutType)
    {
        $this->layoutType = $layoutType;
    }

    public function setSections(array $sections)
    {
        $this->sections = $sections;
    }
}

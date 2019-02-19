<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class LayoutSectionTranslation
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $label
 * @property string|null $section
 */
class LayoutSectionTranslation
{
    public static $classMap = [
    ];

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setSection(string $section)
    {
        $this->section = $section;
    }
}

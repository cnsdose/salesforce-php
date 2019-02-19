<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ReportTypeTranslation
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $description
 * @property string|null $label
 * @property string|null $name
 * @property ReportTypeSectionTranslation[]|null $sections
 */
class ReportTypeTranslation
{
    public static $classMap = [
        'sections' => [
            'multiple' => true,
            'type' => ReportTypeSectionTranslation::class,
        ],
    ];

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setSections(array $sections)
    {
        $this->sections = $sections;
    }
}

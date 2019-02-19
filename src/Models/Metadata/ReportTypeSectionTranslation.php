<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ReportTypeSectionTranslation
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property ReportTypeColumnTranslation[]|null $columns
 * @property string|null $label
 * @property string|null $name
 */
class ReportTypeSectionTranslation
{
    public static $classMap = [
        'columns' => [
            'multiple' => true,
            'type' => ReportTypeColumnTranslation::class,
        ],
    ];

    public function setColumns(array $columns)
    {
        $this->columns = $columns;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }
}

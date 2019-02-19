<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ReportLayoutSection
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property ReportTypeColumn[]|null $columns
 * @property string|null $masterLabel
 */
class ReportLayoutSection
{
    public static $classMap = [
        'columns' => [
            'multiple' => true,
            'type' => ReportTypeColumn::class,
        ],
    ];

    public function setColumns(array $columns)
    {
        $this->columns = $columns;
    }

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }
}

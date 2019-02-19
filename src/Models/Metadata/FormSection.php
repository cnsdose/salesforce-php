<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FormSection
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property FormColumn[]|null $formColumns
 * @property string|null $masterLabel
 * @property string|null $tabOrderType
 */
class FormSection extends Metadata
{
    public static $classMap = [
        'formColumns' => [
            'multiple' => true,
            'type' => FormColumn::class,
        ],
    ];

    public function setFormColumns(array $formColumns)
    {
        $this->formColumns = $formColumns;
    }

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }

    public function setTabOrderType(FormSectionTabOrder $tabOrderType)
    {
        $this->tabOrderType = $tabOrderType->getValue();
    }
}

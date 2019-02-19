<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class Form
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $description
 * @property FormSection[]|null $formSections
 * @property string|null $masterLabel
 */
class Form extends Metadata
{
    public static $classMap = [
        'formSections' => [
            'multiple' => true,
            'type' => FormSection::class,
        ],
    ];

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setFormSections(array $formSections)
    {
        $this->formSections = $formSections;
    }

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }
}

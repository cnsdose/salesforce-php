<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CustomHelpMenuSection
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property CustomHelpMenuItem[]|null $customHelpMenuItems
 * @property string|null $masterLabel
 */
class CustomHelpMenuSection extends Metadata
{
    public static $classMap = [
        'customHelpMenuItems' => [
            'multiple' => true,
            'type' => CustomHelpMenuItem::class,
        ],
    ];

    public function setCustomHelpMenuItems(array $customHelpMenuItems)
    {
        $this->customHelpMenuItems = $customHelpMenuItems;
    }

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }
}

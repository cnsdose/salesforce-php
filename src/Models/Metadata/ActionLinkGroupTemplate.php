<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ActionLinkGroupTemplate
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property ActionLinkTemplate[]|null $actionLinkTemplates
 * @property string|null $category
 * @property string|null $executionsAllowed
 * @property int|null $hoursUntilExpiration
 * @property bool|null $isPublished
 * @property string|null $name
 */
class ActionLinkGroupTemplate extends Metadata
{
    public static $classMap = [
        'actionLinkTemplates' => [
            'multiple' => true,
            'type' => ActionLinkTemplate::class,
        ],
    ];

    public function setActionLinkTemplates(array $actionLinkTemplates)
    {
        $this->actionLinkTemplates = $actionLinkTemplates;
    }

    public function setCategory(PlatformActionGroupCategory $category)
    {
        $this->category = $category->getValue();
    }

    public function setExecutionsAllowed(ActionLinkExecutionsAllowed $executionsAllowed)
    {
        $this->executionsAllowed = $executionsAllowed->getValue();
    }

    public function setHoursUntilExpiration(int $hoursUntilExpiration)
    {
        $this->hoursUntilExpiration = $hoursUntilExpiration;
    }

    public function setIsPublished(bool $isPublished)
    {
        $this->isPublished = $isPublished;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }
}

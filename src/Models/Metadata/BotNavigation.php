<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class BotNavigation
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property BotNavigationLink[]|null $botNavigationLinks
 * @property string|null $type
 */
class BotNavigation
{
    public static $classMap = [
        'botNavigationLinks' => [
            'multiple' => true,
            'type' => BotNavigationLink::class,
        ],
    ];

    public function setBotNavigationLinks(array $botNavigationLinks)
    {
        $this->botNavigationLinks = $botNavigationLinks;
    }

    public function setType(BotNavigationType $type)
    {
        $this->type = $type->getValue();
    }
}

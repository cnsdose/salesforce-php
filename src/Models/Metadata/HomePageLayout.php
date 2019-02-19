<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class HomePageLayout
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string[]|null $narrowComponents
 * @property string[]|null $wideComponents
 */
class HomePageLayout extends Metadata
{
    public static $classMap = [
    ];

    public function setNarrowComponents(array $narrowComponents)
    {
        $this->narrowComponents = $narrowComponents;
    }

    public function setWideComponents(array $wideComponents)
    {
        $this->wideComponents = $wideComponents;
    }
}

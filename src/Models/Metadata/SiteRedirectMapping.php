<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class SiteRedirectMapping
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $action
 * @property bool|null $isActive
 * @property string|null $source
 * @property string|null $target
 */
class SiteRedirectMapping
{
    public static $classMap = [
    ];

    public function setAction(SiteRedirect $action)
    {
        $this->action = $action->getValue();
    }

    public function setIsActive(bool $isActive)
    {
        $this->isActive = $isActive;
    }

    public function setSource(string $source)
    {
        $this->source = $source;
    }

    public function setTarget(string $target)
    {
        $this->target = $target;
    }
}

<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class TouchMobileSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableTouchAppIPad
 * @property bool|null $enableTouchAppIPhone
 * @property bool|null $enableTouchBrowserIPad
 * @property bool|null $enableTouchIosPhone
 * @property bool|null $enableVisualforceInTouch
 */
class TouchMobileSettings
{
    public static $classMap = [
    ];

    public function setEnableTouchAppIPad(bool $enableTouchAppIPad)
    {
        $this->enableTouchAppIPad = $enableTouchAppIPad;
    }

    public function setEnableTouchAppIPhone(bool $enableTouchAppIPhone)
    {
        $this->enableTouchAppIPhone = $enableTouchAppIPhone;
    }

    public function setEnableTouchBrowserIPad(bool $enableTouchBrowserIPad)
    {
        $this->enableTouchBrowserIPad = $enableTouchBrowserIPad;
    }

    public function setEnableTouchIosPhone(bool $enableTouchIosPhone)
    {
        $this->enableTouchIosPhone = $enableTouchIosPhone;
    }

    public function setEnableVisualforceInTouch(bool $enableVisualforceInTouch)
    {
        $this->enableVisualforceInTouch = $enableVisualforceInTouch;
    }
}

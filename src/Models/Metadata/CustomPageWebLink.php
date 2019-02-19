<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CustomPageWebLink
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $availability
 * @property string|null $description
 * @property string|null $displayType
 * @property string|null $encodingKey
 * @property bool|null $hasMenubar
 * @property bool|null $hasScrollbars
 * @property bool|null $hasToolbar
 * @property int|null $height
 * @property bool|null $isResizable
 * @property string|null $linkType
 * @property string|null $masterLabel
 * @property string|null $openType
 * @property string|null $page
 * @property string|null $position
 * @property bool|null $protected
 * @property bool|null $requireRowSelection
 * @property string|null $scontrol
 * @property bool|null $showsLocation
 * @property bool|null $showsStatus
 * @property string|null $url
 * @property int|null $width
 */
class CustomPageWebLink extends Metadata
{
    public static $classMap = [
    ];

    public function setAvailability(WebLinkAvailability $availability)
    {
        $this->availability = $availability->getValue();
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setDisplayType(WebLinkDisplayType $displayType)
    {
        $this->displayType = $displayType->getValue();
    }

    public function setEncodingKey(Encoding $encodingKey)
    {
        $this->encodingKey = $encodingKey->getValue();
    }

    public function setHasMenubar(bool $hasMenubar)
    {
        $this->hasMenubar = $hasMenubar;
    }

    public function setHasScrollbars(bool $hasScrollbars)
    {
        $this->hasScrollbars = $hasScrollbars;
    }

    public function setHasToolbar(bool $hasToolbar)
    {
        $this->hasToolbar = $hasToolbar;
    }

    public function setHeight(int $height)
    {
        $this->height = $height;
    }

    public function setIsResizable(bool $isResizable)
    {
        $this->isResizable = $isResizable;
    }

    public function setLinkType(WebLinkType $linkType)
    {
        $this->linkType = $linkType->getValue();
    }

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }

    public function setOpenType(WebLinkWindowType $openType)
    {
        $this->openType = $openType->getValue();
    }

    public function setPage(string $page)
    {
        $this->page = $page;
    }

    public function setPosition(WebLinkPosition $position)
    {
        $this->position = $position->getValue();
    }

    public function setProtected(bool $protected)
    {
        $this->protected = $protected;
    }

    public function setRequireRowSelection(bool $requireRowSelection)
    {
        $this->requireRowSelection = $requireRowSelection;
    }

    public function setScontrol(string $scontrol)
    {
        $this->scontrol = $scontrol;
    }

    public function setShowsLocation(bool $showsLocation)
    {
        $this->showsLocation = $showsLocation;
    }

    public function setShowsStatus(bool $showsStatus)
    {
        $this->showsStatus = $showsStatus;
    }

    public function setUrl(string $url)
    {
        $this->url = $url;
    }

    public function setWidth(int $width)
    {
        $this->width = $width;
    }
}

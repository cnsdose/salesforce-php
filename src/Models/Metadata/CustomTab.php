<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CustomTab
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property ActionOverride[]|null $actionOverrides
 * @property string|null $auraComponent
 * @property bool|null $customObject
 * @property string|null $description
 * @property string|null $flexiPage
 * @property int|null $frameHeight
 * @property bool|null $hasSidebar
 * @property string|null $icon
 * @property string|null $label
 * @property bool|null $mobileReady
 * @property string|null $motif
 * @property string|null $page
 * @property string|null $scontrol
 * @property string|null $splashPageLink
 * @property string|null $url
 * @property string|null $urlEncodingKey
 */
class CustomTab extends Metadata
{
    public static $classMap = [
        'actionOverrides' => [
            'multiple' => true,
            'type' => ActionOverride::class,
        ],
    ];

    public function setActionOverrides(array $actionOverrides)
    {
        $this->actionOverrides = $actionOverrides;
    }

    public function setAuraComponent(string $auraComponent)
    {
        $this->auraComponent = $auraComponent;
    }

    public function setCustomObject(bool $customObject)
    {
        $this->customObject = $customObject;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setFlexiPage(string $flexiPage)
    {
        $this->flexiPage = $flexiPage;
    }

    public function setFrameHeight(int $frameHeight)
    {
        $this->frameHeight = $frameHeight;
    }

    public function setHasSidebar(bool $hasSidebar)
    {
        $this->hasSidebar = $hasSidebar;
    }

    public function setIcon(string $icon)
    {
        $this->icon = $icon;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setMobileReady(bool $mobileReady)
    {
        $this->mobileReady = $mobileReady;
    }

    public function setMotif(string $motif)
    {
        $this->motif = $motif;
    }

    public function setPage(string $page)
    {
        $this->page = $page;
    }

    public function setScontrol(string $scontrol)
    {
        $this->scontrol = $scontrol;
    }

    public function setSplashPageLink(string $splashPageLink)
    {
        $this->splashPageLink = $splashPageLink;
    }

    public function setUrl(string $url)
    {
        $this->url = $url;
    }

    public function setUrlEncodingKey(Encoding $urlEncodingKey)
    {
        $this->urlEncodingKey = $urlEncodingKey->getValue();
    }
}

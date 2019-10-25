<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class EmbeddedServiceMenuSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $branding
 * @property EmbeddedServiceMenuItem[]|null $embeddedServiceMenuItems
 * @property bool|null $isEnabled
 * @property string|null $masterLabel
 * @property string|null $site
 */
class EmbeddedServiceMenuSettings extends Metadata
{
    public static $classMap = [
        'embeddedServiceMenuItems' => [
            'multiple' => true,
            'type' => EmbeddedServiceMenuItem::class,
        ],
    ];

    public function setBranding(string $branding)
    {
        $this->branding = $branding;
    }

    public function setEmbeddedServiceMenuItems(array $embeddedServiceMenuItems)
    {
        $this->embeddedServiceMenuItems = $embeddedServiceMenuItems;
    }

    public function setIsEnabled(bool $isEnabled)
    {
        $this->isEnabled = $isEnabled;
    }

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }

    public function setSite(string $site)
    {
        $this->site = $site;
    }
}

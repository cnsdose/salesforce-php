<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CallCenter
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $adapterUrl
 * @property string|null $customSettings
 * @property string|null $displayName
 * @property string|null $displayNameLabel
 * @property string|null $internalNameLabel
 * @property CallCenterSection[]|null $sections
 * @property string|null $version
 */
class CallCenter extends Metadata
{
    public static $classMap = [
        'sections' => [
            'multiple' => true,
            'type' => CallCenterSection::class,
        ],
    ];

    public function setAdapterUrl(string $adapterUrl)
    {
        $this->adapterUrl = $adapterUrl;
    }

    public function setCustomSettings(string $customSettings)
    {
        $this->customSettings = $customSettings;
    }

    public function setDisplayName(string $displayName)
    {
        $this->displayName = $displayName;
    }

    public function setDisplayNameLabel(string $displayNameLabel)
    {
        $this->displayNameLabel = $displayNameLabel;
    }

    public function setInternalNameLabel(string $internalNameLabel)
    {
        $this->internalNameLabel = $internalNameLabel;
    }

    public function setSections(array $sections)
    {
        $this->sections = $sections;
    }

    public function setVersion(string $version)
    {
        $this->version = $version;
    }
}

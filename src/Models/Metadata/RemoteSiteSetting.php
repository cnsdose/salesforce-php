<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class RemoteSiteSetting
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $description
 * @property bool|null $disableProtocolSecurity
 * @property bool|null $isActive
 * @property string|null $url
 */
class RemoteSiteSetting extends Metadata
{
    public static $classMap = [
    ];

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setDisableProtocolSecurity(bool $disableProtocolSecurity)
    {
        $this->disableProtocolSecurity = $disableProtocolSecurity;
    }

    public function setIsActive(bool $isActive)
    {
        $this->isActive = $isActive;
    }

    public function setUrl(string $url)
    {
        $this->url = $url;
    }
}

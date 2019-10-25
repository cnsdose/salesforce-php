<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class EssentialsSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $emailConnectorEnabled
 * @property bool|null $essentialsAppEnabled
 */
class EssentialsSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEmailConnectorEnabled(bool $emailConnectorEnabled)
    {
        $this->emailConnectorEnabled = $emailConnectorEnabled;
    }

    public function setEssentialsAppEnabled(bool $essentialsAppEnabled)
    {
        $this->essentialsAppEnabled = $essentialsAppEnabled;
    }
}

<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class InstalledPackage
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $activateRSS
 * @property string|null $password
 * @property string|null $versionNumber
 */
class InstalledPackage extends Metadata
{
    public static $classMap = [
    ];

    public function setActivateRSS(bool $activateRSS)
    {
        $this->activateRSS = $activateRSS;
    }

    public function setPassword(string $password)
    {
        $this->password = $password;
    }

    public function setVersionNumber(string $versionNumber)
    {
        $this->versionNumber = $versionNumber;
    }
}

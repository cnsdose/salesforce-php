<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class EmailServicesAddress
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $authorizedSenders
 * @property string|null $developerName
 * @property bool|null $isActive
 * @property string|null $localPart
 * @property string|null $runAsUser
 */
class EmailServicesAddress
{
    public static $classMap = [
    ];

    public function setAuthorizedSenders(string $authorizedSenders)
    {
        $this->authorizedSenders = $authorizedSenders;
    }

    public function setDeveloperName(string $developerName)
    {
        $this->developerName = $developerName;
    }

    public function setIsActive(bool $isActive)
    {
        $this->isActive = $isActive;
    }

    public function setLocalPart(string $localPart)
    {
        $this->localPart = $localPart;
    }

    public function setRunAsUser(string $runAsUser)
    {
        $this->runAsUser = $runAsUser;
    }
}

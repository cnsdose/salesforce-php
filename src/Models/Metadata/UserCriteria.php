<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class UserCriteria
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property int|null $creationAgeInSeconds
 * @property string|null $description
 * @property int|null $lastChatterActivityAgeInSeconds
 * @property string|null $masterLabel
 * @property string[]|null $profiles
 * @property string[]|null $userTypes
 */
class UserCriteria extends Metadata
{
    public static $classMap = [
    ];

    public function setCreationAgeInSeconds(int $creationAgeInSeconds)
    {
        $this->creationAgeInSeconds = $creationAgeInSeconds;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setLastChatterActivityAgeInSeconds(int $lastChatterActivityAgeInSeconds)
    {
        $this->lastChatterActivityAgeInSeconds = $lastChatterActivityAgeInSeconds;
    }

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }

    public function setProfiles(array $profiles)
    {
        $this->profiles = $profiles;
    }

    public function setUserTypes(array $userTypes)
    {
        $this->userTypes = $userTypes;
    }
}

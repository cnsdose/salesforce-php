<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ProfileSearchLayouts
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string[]|null $fields
 * @property string|null $profileName
 */
class ProfileSearchLayouts
{
    public static $classMap = [
    ];

    public function setFields(array $fields)
    {
        $this->fields = $fields;
    }

    public function setProfileName(string $profileName)
    {
        $this->profileName = $profileName;
    }
}

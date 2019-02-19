<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class SharingSet
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property AccessMapping[]|null $accessMappings
 * @property string|null $description
 * @property string|null $name
 * @property string[]|null $profiles
 */
class SharingSet extends Metadata
{
    public static $classMap = [
        'accessMappings' => [
            'multiple' => true,
            'type' => AccessMapping::class,
        ],
    ];

    public function setAccessMappings(array $accessMappings)
    {
        $this->accessMappings = $accessMappings;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setProfiles(array $profiles)
    {
        $this->profiles = $profiles;
    }
}

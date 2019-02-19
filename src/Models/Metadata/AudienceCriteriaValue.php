<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class AudienceCriteriaValue
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $city
 * @property string|null $country
 * @property string|null $domain
 * @property string|null $entityField
 * @property string|null $entityType
 * @property string|null $fieldValue
 * @property string|null $isEnabled
 * @property string|null $permissionName
 * @property string|null $permissionType
 * @property string|null $profile
 * @property string|null $subdivision
 */
class AudienceCriteriaValue
{
    public static $classMap = [
    ];

    public function setCity(string $city)
    {
        $this->city = $city;
    }

    public function setCountry(string $country)
    {
        $this->country = $country;
    }

    public function setDomain(string $domain)
    {
        $this->domain = $domain;
    }

    public function setEntityField(string $entityField)
    {
        $this->entityField = $entityField;
    }

    public function setEntityType(string $entityType)
    {
        $this->entityType = $entityType;
    }

    public function setFieldValue(string $fieldValue)
    {
        $this->fieldValue = $fieldValue;
    }

    public function setIsEnabled(string $isEnabled)
    {
        $this->isEnabled = $isEnabled;
    }

    public function setPermissionName(string $permissionName)
    {
        $this->permissionName = $permissionName;
    }

    public function setPermissionType(string $permissionType)
    {
        $this->permissionType = $permissionType;
    }

    public function setProfile(string $profile)
    {
        $this->profile = $profile;
    }

    public function setSubdivision(string $subdivision)
    {
        $this->subdivision = $subdivision;
    }
}

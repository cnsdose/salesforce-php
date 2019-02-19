<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class LicenseDefinition
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $aggregationGroup
 * @property string|null $description
 * @property bool|null $isPublished
 * @property string|null $label
 * @property LicensedCustomPermissions[]|null $licensedCustomPermissions
 * @property string|null $licensingAuthority
 * @property string|null $licensingAuthorityProvider
 * @property int|null $minPlatformVersion
 * @property string|null $origin
 * @property int|null $revision
 * @property int|null $trialLicenseDuration
 * @property int|null $trialLicenseQuantity
 */
class LicenseDefinition extends Metadata
{
    public static $classMap = [
        'licensedCustomPermissions' => [
            'multiple' => true,
            'type' => LicensedCustomPermissions::class,
        ],
    ];

    public function setAggregationGroup(string $aggregationGroup)
    {
        $this->aggregationGroup = $aggregationGroup;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setIsPublished(bool $isPublished)
    {
        $this->isPublished = $isPublished;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setLicensedCustomPermissions(array $licensedCustomPermissions)
    {
        $this->licensedCustomPermissions = $licensedCustomPermissions;
    }

    public function setLicensingAuthority(string $licensingAuthority)
    {
        $this->licensingAuthority = $licensingAuthority;
    }

    public function setLicensingAuthorityProvider(string $licensingAuthorityProvider)
    {
        $this->licensingAuthorityProvider = $licensingAuthorityProvider;
    }

    public function setMinPlatformVersion(int $minPlatformVersion)
    {
        $this->minPlatformVersion = $minPlatformVersion;
    }

    public function setOrigin(string $origin)
    {
        $this->origin = $origin;
    }

    public function setRevision(int $revision)
    {
        $this->revision = $revision;
    }

    public function setTrialLicenseDuration(int $trialLicenseDuration)
    {
        $this->trialLicenseDuration = $trialLicenseDuration;
    }

    public function setTrialLicenseQuantity(int $trialLicenseQuantity)
    {
        $this->trialLicenseQuantity = $trialLicenseQuantity;
    }
}

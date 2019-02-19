<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class Profile
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property ProfileApplicationVisibility[]|null $applicationVisibilities
 * @property ProfileCategoryGroupVisibility[]|null $categoryGroupVisibilities
 * @property ProfileApexClassAccess[]|null $classAccesses
 * @property bool|null $custom
 * @property ProfileCustomPermissions[]|null $customPermissions
 * @property string|null $description
 * @property ProfileExternalDataSourceAccess[]|null $externalDataSourceAccesses
 * @property ProfileFieldLevelSecurity[]|null $fieldPermissions
 * @property ProfileLayoutAssignment[]|null $layoutAssignments
 * @property ProfileLoginHours|null $loginHours
 * @property ProfileLoginIpRange[]|null $loginIpRanges
 * @property ProfileObjectPermissions[]|null $objectPermissions
 * @property ProfileApexPageAccess[]|null $pageAccesses
 * @property ProfileActionOverride[]|null $profileActionOverrides
 * @property ProfileRecordTypeVisibility[]|null $recordTypeVisibilities
 * @property ProfileTabVisibility[]|null $tabVisibilities
 * @property string|null $userLicense
 * @property ProfileUserPermission[]|null $userPermissions
 */
class Profile extends Metadata
{
    public static $classMap = [
        'applicationVisibilities' => [
            'multiple' => true,
            'type' => ProfileApplicationVisibility::class,
        ],
        'categoryGroupVisibilities' => [
            'multiple' => true,
            'type' => ProfileCategoryGroupVisibility::class,
        ],
        'classAccesses' => [
            'multiple' => true,
            'type' => ProfileApexClassAccess::class,
        ],
        'customPermissions' => [
            'multiple' => true,
            'type' => ProfileCustomPermissions::class,
        ],
        'externalDataSourceAccesses' => [
            'multiple' => true,
            'type' => ProfileExternalDataSourceAccess::class,
        ],
        'fieldPermissions' => [
            'multiple' => true,
            'type' => ProfileFieldLevelSecurity::class,
        ],
        'layoutAssignments' => [
            'multiple' => true,
            'type' => ProfileLayoutAssignment::class,
        ],
        'loginHours' => [
            'multiple' => false,
            'type' => ProfileLoginHours::class,
        ],
        'loginIpRanges' => [
            'multiple' => true,
            'type' => ProfileLoginIpRange::class,
        ],
        'objectPermissions' => [
            'multiple' => true,
            'type' => ProfileObjectPermissions::class,
        ],
        'pageAccesses' => [
            'multiple' => true,
            'type' => ProfileApexPageAccess::class,
        ],
        'profileActionOverrides' => [
            'multiple' => true,
            'type' => ProfileActionOverride::class,
        ],
        'recordTypeVisibilities' => [
            'multiple' => true,
            'type' => ProfileRecordTypeVisibility::class,
        ],
        'tabVisibilities' => [
            'multiple' => true,
            'type' => ProfileTabVisibility::class,
        ],
        'userPermissions' => [
            'multiple' => true,
            'type' => ProfileUserPermission::class,
        ],
    ];

    public function setApplicationVisibilities(array $applicationVisibilities)
    {
        $this->applicationVisibilities = $applicationVisibilities;
    }

    public function setCategoryGroupVisibilities(array $categoryGroupVisibilities)
    {
        $this->categoryGroupVisibilities = $categoryGroupVisibilities;
    }

    public function setClassAccesses(array $classAccesses)
    {
        $this->classAccesses = $classAccesses;
    }

    public function setCustom(bool $custom)
    {
        $this->custom = $custom;
    }

    public function setCustomPermissions(array $customPermissions)
    {
        $this->customPermissions = $customPermissions;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setExternalDataSourceAccesses(array $externalDataSourceAccesses)
    {
        $this->externalDataSourceAccesses = $externalDataSourceAccesses;
    }

    public function setFieldPermissions(array $fieldPermissions)
    {
        $this->fieldPermissions = $fieldPermissions;
    }

    public function setLayoutAssignments(array $layoutAssignments)
    {
        $this->layoutAssignments = $layoutAssignments;
    }

    public function setLoginHours(ProfileLoginHours $loginHours)
    {
        $this->loginHours = $loginHours;
    }

    public function setLoginIpRanges(array $loginIpRanges)
    {
        $this->loginIpRanges = $loginIpRanges;
    }

    public function setObjectPermissions(array $objectPermissions)
    {
        $this->objectPermissions = $objectPermissions;
    }

    public function setPageAccesses(array $pageAccesses)
    {
        $this->pageAccesses = $pageAccesses;
    }

    public function setProfileActionOverrides(array $profileActionOverrides)
    {
        $this->profileActionOverrides = $profileActionOverrides;
    }

    public function setRecordTypeVisibilities(array $recordTypeVisibilities)
    {
        $this->recordTypeVisibilities = $recordTypeVisibilities;
    }

    public function setTabVisibilities(array $tabVisibilities)
    {
        $this->tabVisibilities = $tabVisibilities;
    }

    public function setUserLicense(string $userLicense)
    {
        $this->userLicense = $userLicense;
    }

    public function setUserPermissions(array $userPermissions)
    {
        $this->userPermissions = $userPermissions;
    }
}

<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class PermissionSet
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property PermissionSetApplicationVisibility[]|null $applicationVisibilities
 * @property PermissionSetApexClassAccess[]|null $classAccesses
 * @property PermissionSetCustomMetadataTypeAccess[]|null $customMetadataTypeAccesses
 * @property PermissionSetCustomPermissions[]|null $customPermissions
 * @property string|null $description
 * @property PermissionSetExternalDataSourceAccess[]|null $externalDataSourceAccesses
 * @property PermissionSetFieldPermissions[]|null $fieldPermissions
 * @property PermissionSetFlowAccess[]|null $flowAccesses
 * @property bool|null $hasActivationRequired
 * @property string|null $label
 * @property string|null $license
 * @property PermissionSetObjectPermissions[]|null $objectPermissions
 * @property PermissionSetApexPageAccess[]|null $pageAccesses
 * @property PermissionSetRecordTypeVisibility[]|null $recordTypeVisibilities
 * @property PermissionSetTabSetting[]|null $tabSettings
 * @property PermissionSetUserPermission[]|null $userPermissions
 */
class PermissionSet extends Metadata
{
    public static $classMap = [
        'applicationVisibilities' => [
            'multiple' => true,
            'type' => PermissionSetApplicationVisibility::class,
        ],
        'classAccesses' => [
            'multiple' => true,
            'type' => PermissionSetApexClassAccess::class,
        ],
        'customMetadataTypeAccesses' => [
            'multiple' => true,
            'type' => PermissionSetCustomMetadataTypeAccess::class,
        ],
        'customPermissions' => [
            'multiple' => true,
            'type' => PermissionSetCustomPermissions::class,
        ],
        'externalDataSourceAccesses' => [
            'multiple' => true,
            'type' => PermissionSetExternalDataSourceAccess::class,
        ],
        'fieldPermissions' => [
            'multiple' => true,
            'type' => PermissionSetFieldPermissions::class,
        ],
        'flowAccesses' => [
            'multiple' => true,
            'type' => PermissionSetFlowAccess::class,
        ],
        'objectPermissions' => [
            'multiple' => true,
            'type' => PermissionSetObjectPermissions::class,
        ],
        'pageAccesses' => [
            'multiple' => true,
            'type' => PermissionSetApexPageAccess::class,
        ],
        'recordTypeVisibilities' => [
            'multiple' => true,
            'type' => PermissionSetRecordTypeVisibility::class,
        ],
        'tabSettings' => [
            'multiple' => true,
            'type' => PermissionSetTabSetting::class,
        ],
        'userPermissions' => [
            'multiple' => true,
            'type' => PermissionSetUserPermission::class,
        ],
    ];

    public function setApplicationVisibilities(array $applicationVisibilities)
    {
        $this->applicationVisibilities = $applicationVisibilities;
    }

    public function setClassAccesses(array $classAccesses)
    {
        $this->classAccesses = $classAccesses;
    }

    public function setCustomMetadataTypeAccesses(array $customMetadataTypeAccesses)
    {
        $this->customMetadataTypeAccesses = $customMetadataTypeAccesses;
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

    public function setFlowAccesses(array $flowAccesses)
    {
        $this->flowAccesses = $flowAccesses;
    }

    public function setHasActivationRequired(bool $hasActivationRequired)
    {
        $this->hasActivationRequired = $hasActivationRequired;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setLicense(string $license)
    {
        $this->license = $license;
    }

    public function setObjectPermissions(array $objectPermissions)
    {
        $this->objectPermissions = $objectPermissions;
    }

    public function setPageAccesses(array $pageAccesses)
    {
        $this->pageAccesses = $pageAccesses;
    }

    public function setRecordTypeVisibilities(array $recordTypeVisibilities)
    {
        $this->recordTypeVisibilities = $recordTypeVisibilities;
    }

    public function setTabSettings(array $tabSettings)
    {
        $this->tabSettings = $tabSettings;
    }

    public function setUserPermissions(array $userPermissions)
    {
        $this->userPermissions = $userPermissions;
    }
}

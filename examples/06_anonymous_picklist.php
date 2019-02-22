<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 2019-02-22
 * Time: 14:58
 *
 * Example of creating a custom field with anonymous picklists
 */

require_once '00_prelude.php';

use CNSDose\Salesforce\Exceptions\MalformedRequestException;
use CNSDose\Salesforce\Models\BaseRecordModel;
use CNSDose\Salesforce\Models\Metadata\CustomField;
use CNSDose\Salesforce\Models\Metadata\CustomObject;
use CNSDose\Salesforce\Models\Metadata\CustomValue;
use CNSDose\Salesforce\Models\Metadata\DeploymentStatus;
use CNSDose\Salesforce\Models\Metadata\FieldType;
use CNSDose\Salesforce\Models\Metadata\SharingModel;
use CNSDose\Salesforce\Models\Metadata\ValueSet;
use CNSDose\Salesforce\Models\Metadata\ValueSetValuesDefinition;
use CNSDose\Salesforce\Models\Records\FieldPermissions;
use CNSDose\Salesforce\Models\Records\PermissionSet;

// Create a custom object
$customObject = new CustomObject();
$customObject->setFullName('MyCustomObject1__c');
$customObject->setDeploymentStatus(DeploymentStatus::DEPLOYED());
$customObject->setDescription('Created by the Metadata API');
$customObject->setEnableActivities(true);
$customObject->setLabel('MyCustomObject1 Object');
$customObject->setPluralLabel('MyCustomObject1 Objects');
$customObject->setSharingModel(SharingModel::READ_WRITE());

$nameField = new CustomField();
$nameField->setType(FieldType::TEXT());
$nameField->setLabel('MyCustomObject1__c Name');
$nameField->setIsNameField(true);

$customObject->setNameField($nameField);

var_dump(
    $customObject->upsert()
);

// Create a custom picklist field (non-global)
$picklistField = new CustomField();
$picklistField->setType(FieldType::PICKLIST());
$picklistField->setFullName('MyCustomObject1__c.Picklist__c');
$picklistField->setLabel('MyCustomObject1__c Picklist');
$picklistField->setRequired(false);

$valueSet = new ValueSet();
$valueSet->setRestricted(true);
$valueSetDef = new ValueSetValuesDefinition();
$values = [];
$value = new CustomValue();
$value->setFullName('Foo');
$value->setLabel('Foo');
$value->setDefault(false);
$values[] = $value;
$value = new CustomValue();
$value->setFullName('Bar');
$value->setLabel('Bar');
$value->setDefault(false);
$values[] = $value;
$valueSetDef->setValue($values);
$valueSetDef->setSorted(true);
$valueSet->setValueSetDefinition($valueSetDef);

$picklistField->setValueSet($valueSet);

var_dump(
    $picklistField->upsert()
);

// Configure field level security
$permissionSets = PermissionSet::build()
    ->select(['Id', 'ProfileId'])
    ->query();
$fieldPermissionsSet = [];
foreach ($permissionSets as $permissionSet) {
    if (!empty($permissionSet->ProfileId)) {
        $fieldPermissions = new FieldPermissions();
        $fieldPermissions->ParentId = $permissionSet->Id;
        $fieldPermissions->SobjectType = 'MyCustomObject1__c';
        $fieldPermissions->Field = 'MyCustomObject1__c.Picklist__c';
        $fieldPermissions->PermissionsEdit = true;
        $fieldPermissions->PermissionsRead = true;
        $fieldPermissionsSet[] = $fieldPermissions;
    }
}
var_dump(
    BaseRecordModel::createMultiple($fieldPermissionsSet)
);

// Create a custom multi-select picklist field (non-global)
$multiPicklistField = new CustomField();
$multiPicklistField->setType(FieldType::MULTISELECT_PICKLIST());
$multiPicklistField->setFullName('MyCustomObject1__c.MultiSelectPicklist__c');
$multiPicklistField->setLabel('MyCustomObject1__c MultiSelectPicklist');
$multiPicklistField->setRequired(false);
$multiPicklistField->setVisibleLines(4);
$valueSet->setRestricted(false);
$multiPicklistField->setValueSet($valueSet);
var_dump(
    $multiPicklistField->upsert()
);
$fieldPermissionsSet = [];
foreach ($permissionSets as $permissionSet) {
    if (!empty($permissionSet->ProfileId)) {
        $fieldPermissions = new FieldPermissions();
        $fieldPermissions->ParentId = $permissionSet->Id;
        $fieldPermissions->SobjectType = 'MyCustomObject1__c';
        $fieldPermissions->Field = 'MyCustomObject1__c.MultiSelectPicklist__c';
        $fieldPermissions->PermissionsEdit = true;
        $fieldPermissions->PermissionsRead = true;
        $fieldPermissionsSet[] = $fieldPermissions;
    }
}
var_dump(
    BaseRecordModel::createMultiple($fieldPermissionsSet)
);

/**
 * Class MyCustomObject1
 *
 * @method MyCustomObject1[] query()
 *
 * @property string $Id
 * @property string $OwnerId
 * @property bool $IsDeleted
 * @property string $Name
 * @property string $CurrencyIsoCode
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property \Carbon\Carbon $LastActivityDate
 * @property string $Picklist__c
 * @property string[] $MultiSelectPicklist__c
 */
class MyCustomObject1 extends BaseRecordModel
{
    public static $objectApiName = 'MyCustomObject1__c';
    protected $defaultFields = [
        'Id' => null,
        'OwnerId' => null,
        'IsDeleted' => 'bool',
        'Name' => null,
        'CurrencyIsoCode' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'LastActivityDate' => 'date',
        'Picklist__c' => null,
        'MultiSelectPicklist__c' => 'multipicklist',
    ];
}

$myObject = new MyCustomObject1();
$myObject->Picklist__c = 'Foo';
$myObject->MultiSelectPicklist__c = ['Foo', 'Bar', 'Hello', 'World'];
var_dump(
    $myObject->create()
);
try {
    $myObject = new MyCustomObject1();
    $myObject->Picklist__c = 'Hello';   // invalid, only possible if $valueSet->setRestricted(false)
    var_dump(
        $myObject->create()
    );
} catch (MalformedRequestException $e) {
    echo $e->getMessage() . "\n";
}
var_dump(
    MyCustomObject1::build()
        ->where('Picklist__c', "'Foo'")
        ->where('MultiSelectPicklist__c', 'INCLUDES', "('Hello')")
        ->query()[0]
        ->MultiSelectPicklist__c
);

// clean up
var_dump(
    $customObject->delete()
);

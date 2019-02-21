<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 21/02/19
 * Time: 2:45 PM
 *
 * Create custom lookup relationship using Metadata API
 */

require_once '00_prelude.php';

use CNSDose\Salesforce\Models\BaseRecordModel;
use CNSDose\Salesforce\Models\Metadata\CustomField;
use CNSDose\Salesforce\Models\Metadata\CustomObject;
use CNSDose\Salesforce\Models\Metadata\DeploymentStatus;
use CNSDose\Salesforce\Models\Metadata\FieldType;
use CNSDose\Salesforce\Models\Metadata\SharingModel;
use CNSDose\Salesforce\Models\Records\FieldPermissions;
use CNSDose\Salesforce\Models\Records\PermissionSet;

// Create custom object Tree
$tree = new CustomObject();
$tree->setFullName('SalesforcePHPTestTree__c');
$tree->setDeploymentStatus(DeploymentStatus::DEPLOYED());
$tree->setEnableActivities(true);
$tree->setLabel('Tree');
$tree->setPluralLabel('Trees');
$tree->setSharingModel(SharingModel::READ_WRITE());
$treeName = new CustomField();
$treeName->setType(FieldType::TEXT());
$treeName->setLabel('Tree Name');
$treeName->setIsNameField(true);
$tree->setNameField($treeName);
$result = $tree->create();
$tree = CustomObject::read($tree->fullName);

// Create custom object Apple
$apple = new CustomObject();
$apple->setFullName('SalesforcePHPTestApple__c');
$apple->setDeploymentStatus(DeploymentStatus::DEPLOYED());
$apple->setEnableActivities(true);
$apple->setLabel('Apple');
$apple->setPluralLabel('Apples');
$apple->setSharingModel(SharingModel::READ_WRITE());
$appleName = new CustomField();
$appleName->setType(FieldType::TEXT());
$appleName->setLabel('Apple Name');
$appleName->setIsNameField(true);
$apple->setNameField($appleName);
$result = $apple->create();
$apple = CustomObject::read($apple->fullName);

// Create relationship Tree <= 1:n => Apple
$treeLookup = new CustomField();
$treeLookup->setFullName('SalesforcePHPTestApple__c.TreeId__c');
$treeLookup->setLabel('Apple-Tree Relationship');
$treeLookup->setType(FieldType::LOOKUP());
$treeLookup->setReferenceTo('SalesforcePHPTestTree__c');
$treeLookup->setRelationshipLabel('Apple-Tree');
$treeLookup->setRelationshipName('Apples');
$result = $treeLookup->create();

// Configure field level security
$permissionSets = PermissionSet::build()
    ->select(['Id', 'ProfileId'])
    ->query();
$fieldPermissionsSet = [];
foreach ($permissionSets as $permissionSet) {
    if (!empty($permissionSet->ProfileId)) {
        $fieldPermissions = new FieldPermissions();
        $fieldPermissions->ParentId = $permissionSet->Id;
        $fieldPermissions->SobjectType = 'SalesforcePHPTestApple__c';
        $fieldPermissions->Field = 'SalesforcePHPTestApple__c.TreeId__c';
        $fieldPermissions->PermissionsEdit = true;
        $fieldPermissions->PermissionsRead = true;
        $fieldPermissionsSet[] = $fieldPermissions;
    }
}
// $allOrNone must be false, as some of them, e.g. those for CnsOnly profiles, may fail
$result = BaseRecordModel::createMultiple($fieldPermissionsSet);

/**
 * Class Tree
 *
 * @method Tree[] query()
 *
 * @property string $Id
 * @property string $OwnerId
 * @property bool $IsDeleted
 * @property string $Name
 * @property mixed $CurrencyIsoCode
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property \Carbon\Carbon $LastActivityDate
 */
class Tree extends BaseRecordModel
{
    public static $objectApiName = 'SalesforcePHPTestTree__c';
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
    ];
}


/**
 * Class Apple
 *
 * @method Apple[] query()
 *
 * @property string $Id
 * @property string $OwnerId
 * @property bool $IsDeleted
 * @property string $Name
 * @property mixed $CurrencyIsoCode
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property \Carbon\Carbon $LastActivityDate
 * @property string $TreeId__c
 */
class Apple extends BaseRecordModel
{
    public static $objectApiName = 'SalesforcePHPTestApple__c';
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
        'TreeId__c' => null,
    ];
}

$appleTree = new Tree();
$appleTree->Name = 'Apple Tree';
$result = $appleTree->create();

$appleTree = Tree::build()
    ->where('Name', "'Apple Tree'")
    ->query()[0];

$appleOnTree = new Apple();
$appleOnTree->Name = 'Juicy Apple';
$appleOnTree->TreeId__c = $appleTree->Id;
$result = $appleOnTree->create();

$appleOnTree = new Apple();
$appleOnTree->Name = 'Crispy Apple';
$appleOnTree->TreeId__c = $appleTree->Id;
$result = $appleOnTree->create();

$applesOnTree = Tree::build()
    ->resolve(Apple::class, 'Apples__r')
    ->where('Name', "'Apple Tree'")
    ->query()[0];

foreach ($applesOnTree->Apples__r as $appleOnTree) {
    /**
     * @var Apple $appleOnTree
     */
    echo $appleOnTree->Name . "\n";
}

// clean up
var_dump(
    $apple->delete()
);
var_dump(
    $tree->delete()
);

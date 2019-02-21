<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 19/02/19
 * Time: 7:10 PM
 */

namespace CNSDose\Salesforce\Tests;

use Carbon\Carbon;
use CNSDose\Salesforce\Exceptions\MalformedRequestException;
use CNSDose\Salesforce\Models\BaseRecordModel;
use CNSDose\Salesforce\Models\Metadata\CustomField;
use CNSDose\Salesforce\Models\Metadata\CustomObject;
use CNSDose\Salesforce\Models\Metadata\DeploymentStatus;
use CNSDose\Salesforce\Models\Metadata\FieldType;
use CNSDose\Salesforce\Models\Metadata\SharingModel;
use CNSDose\Salesforce\Models\Records\FieldPermissions;
use CNSDose\Salesforce\Models\Records\PermissionSet;
use CNSDose\Salesforce\Support\Conversion\Date;
use CNSDose\Salesforce\Support\Conversion\DateTime;
use CNSDose\Salesforce\Support\Conversion\Time;
use CNSDose\Salesforce\Tests\Models\Apple;
use CNSDose\Salesforce\Tests\Models\Tree;

class RecordTest extends TestCase
{
    public function test_set_up()
    {
        $permissionSets = PermissionSet::build()
            ->select(['Id', 'ProfileId'])
            ->query();

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
        $this->assertTrue($result->result->success);

        $treeIsAlive = new CustomField();
        $treeIsAlive->setFullName('SalesforcePHPTestTree__c.IsAlive__c');
        $treeIsAlive->setLabel('Tree is alive');
        $treeIsAlive->setType(FieldType::CHECKBOX());
        $treeIsAlive->setDefaultValue('true');
        $result = $treeIsAlive->create();
        $this->assertTrue($result->result->success);
        $fieldPermissionsSet = [];
        foreach ($permissionSets as $permissionSet) {
            if (!empty($permissionSet->ProfileId)) {
                $fieldPermissions = new FieldPermissions();
                $fieldPermissions->ParentId = $permissionSet->Id;
                $fieldPermissions->SobjectType = 'SalesforcePHPTestTree__c';
                $fieldPermissions->Field = 'SalesforcePHPTestTree__c.IsAlive__c';
                $fieldPermissions->PermissionsEdit = true;
                $fieldPermissions->PermissionsRead = true;
                $fieldPermissionsSet[] = $fieldPermissions;
            }
        }
        $result = BaseRecordModel::createMultiple($fieldPermissionsSet);

        $treePlantDate = new CustomField();
        $treePlantDate->setFullName('SalesforcePHPTestTree__c.PlantDate__c');
        $treePlantDate->setLabel('Tree plant date');
        $treePlantDate->setType(FieldType::DATE());
        $result = $treePlantDate->create();
        $this->assertTrue($result->result->success);
        foreach ($permissionSets as $permissionSet) {
            if (!empty($permissionSet->ProfileId)) {
                $fieldPermissions = new FieldPermissions();
                $fieldPermissions->ParentId = $permissionSet->Id;
                $fieldPermissions->SobjectType = 'SalesforcePHPTestTree__c';
                $fieldPermissions->Field = 'SalesforcePHPTestTree__c.PlantDate__c';
                $fieldPermissions->PermissionsEdit = true;
                $fieldPermissions->PermissionsRead = true;
                $fieldPermissionsSet[] = $fieldPermissions;
            }
        }
        $result = BaseRecordModel::createMultiple($fieldPermissionsSet);

        $treePlantTime = new CustomField();
        $treePlantTime->setFullName('SalesforcePHPTestTree__c.PlantTime__c');
        $treePlantTime->setLabel('Tree plant time');
        $treePlantTime->setType(FieldType::TIME());
        $result = $treePlantTime->create();
        $this->assertTrue($result->result->success);
        foreach ($permissionSets as $permissionSet) {
            if (!empty($permissionSet->ProfileId)) {
                $fieldPermissions = new FieldPermissions();
                $fieldPermissions->ParentId = $permissionSet->Id;
                $fieldPermissions->SobjectType = 'SalesforcePHPTestTree__c';
                $fieldPermissions->Field = 'SalesforcePHPTestTree__c.PlantTime__c';
                $fieldPermissions->PermissionsEdit = true;
                $fieldPermissions->PermissionsRead = true;
                $fieldPermissionsSet[] = $fieldPermissions;
            }
        }
        $result = BaseRecordModel::createMultiple($fieldPermissionsSet);

        $treePlantDateTime = new CustomField();
        $treePlantDateTime->setFullName('SalesforcePHPTestTree__c.PlantDateTime__c');
        $treePlantDateTime->setLabel('Tree plant date time');
        $treePlantDateTime->setType(FieldType::DATE_TIME());
        $result = $treePlantDateTime->create();
        $this->assertTrue($result->result->success);
        foreach ($permissionSets as $permissionSet) {
            if (!empty($permissionSet->ProfileId)) {
                $fieldPermissions = new FieldPermissions();
                $fieldPermissions->ParentId = $permissionSet->Id;
                $fieldPermissions->SobjectType = 'SalesforcePHPTestTree__c';
                $fieldPermissions->Field = 'SalesforcePHPTestTree__c.PlantDateTime__c';
                $fieldPermissions->PermissionsEdit = true;
                $fieldPermissions->PermissionsRead = true;
                $fieldPermissionsSet[] = $fieldPermissions;
            }
        }
        $result = BaseRecordModel::createMultiple($fieldPermissionsSet);

        $treePrice = new CustomField();
        $treePrice->setFullName('SalesforcePHPTestTree__c.Price__c');
        $treePrice->setLabel('Tree price');
        $treePrice->setType(FieldType::NUMBER());
        $treePrice->setPrecision(10);
        $treePrice->setScale(2);
        $result = $treePrice->create();
        $this->assertTrue($result->result->success);
        foreach ($permissionSets as $permissionSet) {
            if (!empty($permissionSet->ProfileId)) {
                $fieldPermissions = new FieldPermissions();
                $fieldPermissions->ParentId = $permissionSet->Id;
                $fieldPermissions->SobjectType = 'SalesforcePHPTestTree__c';
                $fieldPermissions->Field = 'SalesforcePHPTestTree__c.Price__c';
                $fieldPermissions->PermissionsEdit = true;
                $fieldPermissions->PermissionsRead = true;
                $fieldPermissionsSet[] = $fieldPermissions;
            }
        }
        $result = BaseRecordModel::createMultiple($fieldPermissionsSet);

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
        $this->assertTrue($result->result->success);

        $treeLookup = new CustomField();
        $treeLookup->setFullName('SalesforcePHPTestApple__c.TreeId__c');
        $treeLookup->setLabel('Apple-Tree Relationship');
        $treeLookup->setType(FieldType::LOOKUP());
        $treeLookup->setReferenceTo('SalesforcePHPTestTree__c');
        $treeLookup->setRelationshipLabel('Apple-Tree');
        $treeLookup->setRelationshipName('Apples');
        $result = $treeLookup->create();
        $this->assertTrue($result->result->success);

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
        $result = BaseRecordModel::createMultiple($fieldPermissionsSet);
    }

    /**
     * @depends test_set_up
     * @return string
     * @throws \CNSDose\Salesforce\Exceptions\AuthorisationException
     * @throws \CNSDose\Salesforce\Exceptions\ConversionException
     * @throws \CNSDose\Salesforce\Exceptions\MalformedRequestException
     * @throws \CNSDose\Standards\Exceptions\StandardException
     */
    public function test_create_tree_record()
    {
        $tree = new Tree();
        $tree->Name = 'Apple Tree';
        $result = $tree->create();
        $this->assertTrue($result['success']);
        $this->assertNotEmpty($result['id']);
        return $result['id'];
    }

    /**
     * @depends test_create_tree_record
     * @param $treeId
     * @return string
     * @throws \CNSDose\Salesforce\Exceptions\AuthorisationException
     * @throws \CNSDose\Salesforce\Exceptions\ConversionException
     * @throws \CNSDose\Salesforce\Exceptions\MalformedRequestException
     * @throws \CNSDose\Standards\Exceptions\StandardException
     */
    public function test_create_juicy_apple_record($treeId)
    {
        $apple = new Apple();
        $apple->Name = 'Juicy Apple';
        $apple->TreeId__c = $treeId;
        $result = $apple->create();
        $this->assertTrue($result['success']);
        $this->assertNotEmpty($result['id']);
        return $result['id'];
    }

    /**
     * @depends test_create_tree_record
     * @param $treeId
     * @return string
     * @throws \CNSDose\Salesforce\Exceptions\AuthorisationException
     * @throws \CNSDose\Salesforce\Exceptions\ConversionException
     * @throws \CNSDose\Salesforce\Exceptions\MalformedRequestException
     * @throws \CNSDose\Standards\Exceptions\StandardException
     */
    public function test_create_crispy_apple_record($treeId)
    {
        $apple = new Apple();
        $apple->Name = 'Crispy Apple';
        $apple->TreeId__c = $treeId;
        $result = $apple->create();
        $this->assertTrue($result['success']);
        $this->assertNotEmpty($result['id']);
        return $result['id'];
    }

    /**
     * @depends test_create_tree_record
     * @param $treeId
     * @throws \CNSDose\Salesforce\Exceptions\AuthorisationException
     * @throws \CNSDose\Salesforce\Exceptions\ConversionException
     * @throws \CNSDose\Salesforce\Exceptions\MalformedRequestException
     * @throws \CNSDose\Standards\Exceptions\StandardException
     */
    public function test_query_builder($treeId)
    {
        $tree = Tree::build()
            ->select('Id')
            ->where('Name', "'Apple Tree'")
            ->limit(1)
            ->query()[0];
        $this->assertEquals($treeId, $tree->Id);
    }

    /**
     * @depends test_create_tree_record
     * @depends test_create_crispy_apple_record
     * @depends test_create_juicy_apple_record
     * @param $treeId
     * @throws \CNSDose\Salesforce\Exceptions\AuthorisationException
     * @throws \CNSDose\Salesforce\Exceptions\ConversionException
     * @throws \CNSDose\Salesforce\Exceptions\MalformedRequestException
     * @throws \CNSDose\Standards\Exceptions\StandardException
     */
    public function test_resolve_relationship($treeId)
    {
        $treeWithApples = Tree::build()
            ->select('Id')
            ->resolve(Apple::class, 'Apples__r')
            ->where('Name', 'LIKE', "'Apple%'")
            ->orWhere('Name', "'Apple Tree'")
            ->query()[0];
        $appleNames = array_map(function (Apple $apple) {
            return $apple->Name;
        }, $treeWithApples->Apples__r);
        sort($appleNames);
        $this->assertEquals($treeWithApples->Id, $treeId);
        $this->assertEquals(['Crispy Apple', 'Juicy Apple'], $appleNames);
    }

    /**
     * @depends test_create_tree_record
     * @param $treeId
     * @return Tree
     * @throws \CNSDose\Salesforce\Exceptions\AuthorisationException
     * @throws \CNSDose\Salesforce\Exceptions\MalformedRequestException
     * @throws \CNSDose\Standards\Exceptions\StandardException
     */
    public function test_query_by_id($treeId)
    {
        $tree = Tree::queryById($treeId);
        $this->assertEquals($treeId, $tree->Id);
        return $tree;
    }

    /**
     * @depends test_create_tree_record
     * @param $treeId
     * @throws \CNSDose\Salesforce\Exceptions\AuthorisationException
     * @throws \CNSDose\Salesforce\Exceptions\MalformedRequestException
     * @throws \CNSDose\Standards\Exceptions\StandardException
     */
    public function test_query_raw($treeId)
    {
        $tree = Tree::build()
            ->queryRaw('SELECT Id FROM ' . Tree::$objectApiName)[0];
        $this->assertEquals($treeId, $tree->Id);
    }

    /**
     * @depends test_query_by_id
     * @param Tree $tree
     * @throws \CNSDose\Salesforce\Exceptions\AuthorisationException
     * @throws \CNSDose\Salesforce\Exceptions\MalformedRequestException
     * @throws \CNSDose\Standards\Exceptions\StandardException
     */
    public function test_upsert($tree)
    {
        $updatedTreeName = 'Updated Apple Tree';
        $plantDateTime = Carbon::now('EST');
        $tree->Name = $updatedTreeName;
        $tree->PlantDate__c = $plantDateTime;
        $tree->PlantDateTime__c = $plantDateTime;
        $tree->PlantTime__c = $plantDateTime;
        $tree->Price__c = 123.12;
        $result = $tree->upsert();
        $this->assertNull($result);
        $tree = Tree::queryById($tree->Id);
        $this->assertEquals($updatedTreeName, $tree->Name);
        $this->assertEquals((new Date())->doEncode($plantDateTime), (new Date())->doEncode($tree->PlantDate__c));
        $plantDateTimeZeroMicro = clone $plantDateTime;
        $plantDateTimeZeroMicro->setTime($plantDateTime->hour, $plantDateTime->minute, $plantDateTime->second, 0);
        $this->assertEquals((new DateTime())->doEncode($plantDateTimeZeroMicro), (new DateTime())->doEncode($tree->PlantDateTime__c));
        $this->assertEquals((new Time())->doEncode($plantDateTime), (new Time())->doEncode($tree->PlantTime__c));
        $this->assertEquals(123.12, $tree->Price__c);
    }

    public function test_wrong_object_name()
    {
        $this->expectException(MalformedRequestException::class);
        BaseRecordModel::build()
            ->queryRaw('SELECT Id FROM NonExistObject__c');
    }

    /**
     * @depends test_create_juicy_apple_record
     * @depends test_create_crispy_apple_record
     * @param $appleId1
     * @param $appleId2
     * @throws MalformedRequestException
     * @throws \CNSDose\Salesforce\Exceptions\AuthorisationException
     * @throws \CNSDose\Salesforce\Exceptions\ConversionException
     * @throws \CNSDose\Standards\Exceptions\StandardException
     */
    public function test_upsert_multiple($appleId1, $appleId2)
    {
        $apples = Apple::build()
            ->where('Id', "'$appleId1'")
            ->orWhere('Id', "'$appleId2'")
            ->query();
        foreach ($apples as $apple) {
            $apple->Name = 'Updated ' . $apple->Name;
        }
        $results = BaseRecordModel::upsertMultiple($apples, true);
        $this->assertTrue($results[0]['success']);
        $this->assertTrue($results[1]['success']);
    }

    /**
     * @depends test_create_tree_record
     * @param $treeId
     * @throws MalformedRequestException
     * @throws \CNSDose\Salesforce\Exceptions\AuthorisationException
     * @throws \CNSDose\Standards\Exceptions\StandardException
     */
    public function test_delete($treeId)
    {
        $tree = new Tree();
        $tree->Id = $treeId;
        $result = $tree->delete();
        $this->assertNull($result);
    }

    /**
     * @depends test_create_juicy_apple_record
     * @depends test_create_crispy_apple_record
     * @param $appleId1
     * @param $appleId2
     * @throws MalformedRequestException
     * @throws \CNSDose\Salesforce\Exceptions\AuthorisationException
     * @throws \CNSDose\Standards\Exceptions\StandardException
     */
    public function test_delete_multiple($appleId1, $appleId2)
    {
        $results = BaseRecordModel::deleteMultiple([$appleId1, $appleId2]);
        $this->assertTrue($results[0]['success']);
        $this->assertTrue($results[1]['success']);
    }

    public function test_tear_down()
    {
        $result = CustomObject::read('SalesforcePHPTestApple__c')->delete();
        $this->assertTrue($result->result->success);
        $result = CustomObject::read('SalesforcePHPTestTree__c')->delete();
        $this->assertTrue($result->result->success);
    }
}

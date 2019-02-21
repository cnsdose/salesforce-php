<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 19/02/19
 * Time: 5:47 PM
 */

namespace CNSDose\Salesforce\Tests;

use CNSDose\Salesforce\Models\BaseMetadataModel;
use CNSDose\Salesforce\Models\Metadata\CustomField;
use CNSDose\Salesforce\Models\Metadata\CustomObject;
use CNSDose\Salesforce\Models\Metadata\DeploymentStatus;
use CNSDose\Salesforce\Models\Metadata\FieldType;
use CNSDose\Salesforce\Models\Metadata\FileProperties;
use CNSDose\Salesforce\Models\Metadata\ListMetadataQuery;
use CNSDose\Salesforce\Models\Metadata\SharingModel;

class MetadataTest extends TestCase
{
    /**
     * @return string
     * @throws \CNSDose\Standards\Exceptions\StandardException
     * @throws \SoapFault
     */
    public function test_create_custom_object()
    {
        $fullName = 'SalesforcePHPTest__c';

        $customObject = new CustomObject();
        $customObject->setFullName($fullName);
        $customObject->setDeploymentStatus(DeploymentStatus::DEPLOYED());
        $customObject->setEnableActivities(true);
        $customObject->setLabel('SalesforcePHPTest Object');
        $customObject->setPluralLabel('SalesforcePHPTest Objects');
        $customObject->setSharingModel(SharingModel::READ_WRITE());

        $nameField = new CustomField();
        $nameField->setType(FieldType::TEXT());
        $nameField->setLabel($fullName . ' Name');
        $nameField->setIsNameField(true);

        $customObject->setNameField($nameField);

        $result = $this->objectToArray($customObject->create());
        $this->assertTrue($result['result']['success'] ?? false, 'Failed to create custom object');

        return $fullName;
    }

    /**
     * @depends test_create_custom_object
     * @param string $fullName
     * @throws \CNSDose\Standards\Exceptions\StandardException
     */
    public function test_list_custom_object(string $fullName)
    {
        $query = new ListMetadataQuery();
        $query->setType('CustomObject');
        $customObjects = BaseMetadataModel::listMetadata($query);
        $names = array_map(function (FileProperties $customObject) {
            return $customObject->fullName;
        }, $customObjects->result);
        $this->assertContains($fullName, $names);
    }

    /**
     * @depends test_create_custom_object
     * @param string $fullName
     * @return CustomObject|null
     * @throws \CNSDose\Standards\Exceptions\StandardException
     * @throws \SoapFault
     */
    public function test_read_custom_object(string $fullName)
    {
        $this->assertNotEmpty($fullName, 'Full name is empty');
        $customObject = CustomObject::read($fullName);
        $this->assertNotEmpty($customObject, 'Could not find custom object ' . $fullName);
        return $customObject;
    }

    /**
     * @depends test_read_custom_object
     * @param CustomObject $customObject
     * @return CustomObject
     * @throws \CNSDose\Standards\Exceptions\StandardException
     * @throws \SoapFault
     */
    public function test_update_custom_object(CustomObject $customObject)
    {
        $this->assertNotEmpty($customObject, 'Custom object is empty');

        $description = 'Test update description';
        $customObject->setDescription($description);

        $result = $this->objectToArray($customObject->update());
        $this->assertTrue($result['result']['success'] ?? false, 'Failed to update custom object');

        return $customObject;
    }

    /**
     * @depends test_update_custom_object
     * @param CustomObject $customObject
     * @return CustomObject|null
     * @throws \CNSDose\Standards\Exceptions\StandardException
     * @throws \SoapFault
     */
    public function test_upsert_custom_object(CustomObject $customObject)
    {
        $this->assertNotEmpty($customObject, 'Custom object is empty');

        $description = 'Test upsert description';
        $customObject->setDescription($description);

        $result = $this->objectToArray($customObject->upsert());
        $this->assertTrue($result['result']['success'] ?? false, 'Failed to upsert custom object');

        $customObject2 = CustomObject::read($customObject->fullName);
        $this->assertEquals($description, $customObject2->description);

        return $customObject2;
    }

    /**
     * @depends test_update_custom_object
     * @param CustomObject $customObject
     * @return CustomObject
     * @throws \CNSDose\Standards\Exceptions\StandardException
     * @throws \SoapFault
     */
    public function test_rename_custom_object(CustomObject $customObject)
    {
        $this->assertNotEmpty($customObject, 'Custom object is empty');

        $originalFullName = $customObject->fullName;
        $result = $this->objectToArray($customObject->rename('SalesforcePHPTestRenamed__c'));
        $this->assertTrue($result['result']['success'] ?? false, 'Failed to rename custom object');

        $customObject2 = CustomObject::read($originalFullName);
        $this->assertEmpty($customObject2, $originalFullName . ' still exists');

        return $customObject;
    }

    /**
     * @depends test_rename_custom_object
     * @param CustomObject $customObject
     * @throws \CNSDose\Standards\Exceptions\StandardException
     * @throws \SoapFault
     */
    public function test_delete_custom_object(CustomObject $customObject)
    {
        $this->assertNotEmpty($customObject, 'Custom object is empty');

        $result = $this->objectToArray($customObject->delete());
        $this->assertTrue($result['result']['success'] ?? false, 'Failed to delete custom object');
    }
}

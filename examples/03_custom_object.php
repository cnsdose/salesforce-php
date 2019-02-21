<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 20/02/19
 * Time: 9:54 PM
 */

require_once '00_prelude.php';

use CNSDose\Salesforce\Models\Metadata\CustomField;
use CNSDose\Salesforce\Models\Metadata\CustomObject;
use CNSDose\Salesforce\Models\Metadata\DeploymentStatus;
use CNSDose\Salesforce\Models\Metadata\FieldType;
use CNSDose\Salesforce\Models\Metadata\SharingModel;

// Create
// Same as Java example in https://developer.salesforce.com/docs/atlas.en-us.216.0.api_meta.meta/api_meta/meta_createMetadata.htm
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
    $customObject->create()
);

// Read & Update
$customObject = CustomObject::read('MyCustomObject1__c');
$customObject->setDescription('Updated description!');
var_dump(
    $customObject->update()
);

// Rename
var_dump(
    $customObject->rename('MyCustomObject2__c')
);

// Upsert
$customObject->setLabel('MyCustomObject1 Object');
$customObject->setPluralLabel('MyCustomObject1 Objects');
var_dump(
    $customObject->upsert()
);

// Delete
var_dump(
    $customObject->delete()
);

# Salesforce PHP SDK

## Installation

1. Merge the following configurations into your `composer.json`
    ```json
    {
        "require": {
            "cnsdose/salesforce-php": "dev-master"
        },
        "repositories": [
            {
                "type": "vcs",
                "url": "git@bitbucket.org:cnsd/salesforce-php.git"
            }
        ]
    }
    ```
0. `composer update`
0. Register service provider
    1. Laravel
        ```php
        // config/app.php
        'providers' => [
            // ...
            \CNSDose\Salesforce\Providers\SalesforceProvider::class
            // ...
        ]
        ```
    0. Lumen
        ```php
        // bootstrap/app.php
        $app->register(\CNSDose\Salesforce\Providers\SalesforceProvider::class);
        ```
0. `php artisan vendor:publish --provider='CNSDose\Salesforce\Providers\SalesforceProvider'`

## Configuration

See `config/salesforce.php`.

## Records API (REST API)

### Query Records

*The query builder only supports a small subset of SOQL clauses currently.*

#### Basic Usage

**NOTE**: `salesforce-php` does not support automatic quoting/escaping yet.

```php
$result = Account::build()
    ->where('Type', 'LIKE', "'Customer%'")
    ->where('CurrencyIsoCode', "'USD'")
    ->where('CreatedDate', '>=', '2019-01-23T01:01:01.000Z')
    ->where('Site', '=', null)
    ->query();
```

#### Resolving Relationships

```php
$result = Account::build()
    ->select('*')
    ->resolve(Contact::class, 'Contacts')
    ->query();
```

#### Nested Query

```php
$contact = Contact::build()
    ->where(
        'AccountId',
        'IN',
        Account::build()
            ->select('Id')
            ->where('Name', "'AccountExample1'")
            ->orWhere('Name', "'AccountExample2'")
    )
    ->query();
$result = BaseRecordModel::build()
    ->select('Id')
    ->select(
        BaseRecordModel::build()
            ->select('Id')
            ->from('Account.Contacts')
    )
    ->from('Account')
    ->query();
```

#### Raw Query
```php
// $result: original JSON
$result = BaseRecordModel::build()
    ->queryRaw('SELECT Id FROM Account');

// $result: Account[]
$result = Account::build()
    ->queryRaw('SELECT Id FROM Account');
```

#### Query by ID

This method retrieves all defined fields in Salesforce, even if they are not specified in the corresponding class or `config/salesfore.php`.
```php
$result = Account::queryById('0010o00002Cn41XXXX');
```

### Create/Update/Delete Records

#### Create a record

```php
$contact = new Contact();
$contact->FirstName = 'Sheep';
$contact->LastName = 'Shaun';
$contact->Email = 'shaun@example.com';
$contact->create();
```

#### Upsert/Delete a record

```php
/**
 * @var Contact $contact
 */
$contact = Contact::build()
    ->where('LastName', "'Shaun'")
    ->query()[0];
$contact->FirstName = 'Lamb';       // changes after object instantiation are recorded
$contact->upsert();

$contact = new Contact([            // we do not need to query first
    'Id' => $contact->Id,
]);
$contact->FirstName = 'Mince';
$contact->upsert();

$contact->delete();                 // Id is required to delete a record

// Upsert by external ID
$contact = new Contact([
    'Email' => 'bitzer@example.com',
]);
$contact->FirstName = 'Bitzer';
$contact->LastName = 'Woof';
$contact->upsert('Email');
```

### Conversion Rules

Conversion rules allows attributes to be automatically converted/formatted.

#### Built-In Rules

Built-in rules are registered at `\CNSDose\Salesforce\Support\Conversion\BaseConversion::$conversions`.

Some rules allow parameters, e.g. `number:16,2` mean 16 digits to the left of decimal point and 2 to the right.

#### Custom Rules

1. Create a class which is derived from `\CNSDose\Salesforce\Support\Conversion\BaseConversion`
0. Implement required methods
    1. `doDecode`: post-processes data after downloaded from API
    0. `doEncode`: pre-process data before uploaded to API
0. Register rule via `\CNSDose\Salesforce\Support\Conversion\BaseConversion::registerRule`
0. Rule parameters: format `rule_name:arg1,arg2` can be used to pass arguments to the corresponding class constructor, an example could be `\CNSDose\Salesforce\Support\Conversion\Number`

### Custom Fields

Custom fields can be defined in `config/salesforce.php`. Custom fields take precedence over default fields in case of conflicts between names.

#### Example

Adding 3 custom fields, with conversion rules where applicable, to object `Custom`
```php
[
    'custom_fields' => [
        \CNSDose\Salesforce\Models\Sales\Custom::class => [
            'Float__c' => 'number:16,2',
            'Time__c' => 'time',
            'SystemModstamp' => null,
        ],
    ],
]
```

### Custom Objects

Models can be automatically generated for custom objects that have been defined in Salesforce via Artisan command `salesforce:generate-record-model`.

```
$ php artisan help salesforce:generate-record-model
Description:
  Generate Salesforce record model dynamically from API

Usage:
  salesforce:generate-record-model [options] [--] <object>

Arguments:
  object

Options:
  -N, --namespace[=NAMESPACE]
      --package[=PACKAGE]
  -C, --class[=CLASS]
  -T, --token[=TOKEN]
  -A, --all-fields
```

#### Example

```
$ php artisan salesforce:generate-record-model -N 'MyProject\Models' -C Custom -A Custom__c
<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace MyProject\Models;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class Custom
 * @package MyProject\Models
 *
 * @method Custom[] query()
 *
 * @property string Id
 * @property string OwnerId
 * @property bool IsDeleted
 * @property string Name
 * @property mixed CurrencyIsoCode
 * @property \Carbon\Carbon CreatedDate
 * @property string CreatedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property string LastModifiedById
 * @property \Carbon\Carbon SystemModstamp
 * @property bool Checkbox__c
 * @property float Currency__c
 * @property \Carbon\Carbon Date__c
 * @property \Carbon\Carbon DateTime__c
 * @property float Integer__c
 * @property float Float__c
 * @property \Carbon\Carbon Time__c
 */
class Custom extends BaseRecordModel
{
    protected static $objectApiName = 'Custom__c';
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
        'Checkbox__c' => 'bool',
        'Currency__c' => 'number:16,2',
        'Date__c' => 'date',
        'DateTime__c' => 'datetime',
        'Integer__c' => 'number:18,0',
        'Float__c' => 'number:16,2',
        'Time__c' => 'time',
    ];
}
```

#### Custom Type-Rule Mapping

One could use `\CNSDose\Salesforce\Console\GenerateRecordModel::addTypeRule` to map a Salesforce type to a PHP type/conversion rule for convenience.

Common mappings are already defined in `GenerateRecordModel`.

```php
GenerateRecordModel::addTypeRule('type1', 'string', null);
GenerateRecordModel::addTypeRule('type2', '\\Carbon\\Carbon', 'date');
GenerateRecordModel::addTypeRule('type3', 'float', function ($field) {
    return sprintf('number:%s,%s', $field['precision'] - $field['scale'], $field['scale']);
});
```

## Metadata API (SOAP API)

#### Create/Read/Rename/Update/Upsert/Delete
```php
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

$customObject->create();

// Read & Update
$customObject = CustomObject::read('MyCustomObject1__c');
$customObject->setDescription('Updated description!');
$customObject->update();

// Rename
$customObject->rename('MyCustomObject2__c');

// Upsert
$customObject->setLabel('MyCustomObject1 Object');
$customObject->setPluralLabel('MyCustomObject1 Objects');
$customObject->upsert();

// Delete
$customObject->delete();
```

## How to use a different version of Salesforce APIs

1. In Salesforce Lightning Experience, download Metadata WSDL from Setup | Integrations | API and save it in your project
0. Update `api_version` and `metadata_wsdl` in configuration file
0. Use commands `salesforce:generate-metadata-model` and `salesforce:generate-record-model` to generate models (`update_models.sh` in this library could be a good start)

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

## Query Records

*The query builder only supports a small subset of SOQL clauses currently.*

### Basic Usage

**NOTE**: `salesforce-php` does not support automatic quoting/escaping yet.

```php
$result = Account::build()
    ->where('Type', 'LIKE', "'Customer%'")
    ->where('CurrencyIsoCode', "'USD'")
    ->where('CreatedDate', '>=', '2019-01-23T01:01:01.000Z')
    ->where('Site', '=', null)
    ->query();
```

### Resolving Relationships

```php
$result = Account::build()
    ->select('*')
    ->resolve(Contact::class, 'Contacts')
    ->query();
```

### Nested Query

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
$result = BaseModel::build()
    ->select('Id')
    ->select(
        BaseModel::build()
            ->select('Id')
            ->from('Account.Contacts')
    )
    ->from('Account')
    ->query();
```

### Raw Query
```php
// $result: original JSON
$result = BaseModel::build()
    ->queryRaw('SELECT Id FROM Account');

// $result: Account[]
$result = Account::build()
    ->queryRaw('SELECT Id FROM Account');
```

### Query by ID

This method retrieves all defined fields in Salesforce, even if they are not specified in the corresponding class or `config/salesfore.php`.
```php
$result = Account::queryById('0010o00002Cn41XXXX');
```

## Create/Update Records

### Create a record

```php
$contact = new Contact();
$contact->FirstName = 'Sheep';
$contact->LastName = 'Shaun';
$contact->Email = 'shaun@example.com';
$contact->create();
```

### Upsert a record

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

// Upsert by external ID
$contact = new Contact([
    'Email' => 'bitzer@example.com',
]);
$contact->FirstName = 'Bitzer';
$contact->LastName = 'Woof';
$contact->upsert('Email');
```

## Conversion Rules

Conversion rules allows attributes to be automatically converted/formatted.

### Built-In Rules

Built-in rules are registered at `\CNSDose\Salesforce\Support\Conversion\BaseConversion::$conversions`.

Some rules allow parameters, e.g. `number:16,2` mean 16 digits to the left of decimal point and 2 to the right.

### Custom Rules

1. Create a class which is derived from `\CNSDose\Salesforce\Support\Conversion\BaseConversion`
0. Implement required methods
    1. `doDecode`: post-processes data after downloaded from API
    0. `doEncode`: pre-process data before uploaded to API
0. Register rule via `\CNSDose\Salesforce\Support\Conversion\BaseConversion::registerRule`
0. Rule parameters: format `rule_name:arg1,arg2` can be used to pass arguments to the corresponding class constructor, an example could be `\CNSDose\Salesforce\Support\Conversion\Number`

## Custom Fields

Custom fields can be defined in `config/salesforce.php`. Custom fields take precedence over default fields in case of conflicts between names.

### Example

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

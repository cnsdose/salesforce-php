<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 20/02/19
 * Time: 11:15 PM
 *
 * Example usage of the query builder in BaseRecordModel
 */

require_once '00_prelude.php';

use CNSDose\Salesforce\Models\Records\Account;
use CNSDose\Salesforce\Models\Records\Contact;
use CNSDose\Salesforce\Models\BaseRecordModel;

$companyName = 'Dunder Mifflin';
$paperCompany = new Account();
$paperCompany->Name = $companyName;
$paperCompany->CurrencyIsoCode = 'USD';
$result = $paperCompany->create();
// query by ID
$paperCompany = Account::queryById($result['id']);

$michael = new Contact();
$michael->AccountId = $paperCompany->Id;
$michael->FirstName = 'Michael';
$michael->LastName = 'Scott';
$michael->Email = 'michael@dundermifflin.com';
$result = $michael->create();
$michael = Contact::queryById($result['id']);

$contacts = Contact::build()
    // auto quoting is not supported
    ->where('FirstName', "'Michael'")
    // default operator is '='
    ->where('LastName', 'LIKE', "'S%'")
    ->query();
var_dump(
    $contacts[0]->Id === $michael->Id
);

$accounts = Account::build()
    // resolving relationships
    ->resolve(Contact::class, 'Contacts')
    ->where('Name', "'$companyName'")
    ->query();
var_dump(
    $accounts[0]->Contacts[0]->Id === $michael->Id
);

// same thing can be done by nested query
// but results won't be coerced into correct classes then
$accounts = BaseRecordModel::build()
    ->select('Id')
    ->select('Name')
    ->select(
        BaseRecordModel::build()
            ->select(['Id', 'Name'])
            ->from('Account.Contacts')
    )
    ->from('Account')
    ->where('Name', "'$companyName'")
    ->query();
var_dump(
    $accounts[0]->Contacts['records'][0]['Id'] === $michael->Id
);

// clean up
var_dump(
    $michael->delete()
);
var_dump(
    $paperCompany->delete()
);

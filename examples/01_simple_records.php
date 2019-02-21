<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 20/02/19
 * Time: 10:01 PM
 * 
 * Simple example of creating, updating and deleting records
 */

require_once '00_prelude.php';

use CNSDose\Salesforce\Models\Records\Contact;
use CNSDose\Salesforce\Models\Records\Account;
 
$companyName = 'Dunder Mifflin';
$paperCompany = new Account();
$paperCompany->Name = $companyName;
$paperCompany->CurrencyIsoCode = 'USD';
$result = $paperCompany->create();
$paperCompany = Account::queryById($result['id']);
echo "$companyName is open for business!\n";

$michael = new Contact();
$michael->AccountId = $paperCompany->Id;
$michael->FirstName = 'Michael';
$michael->LastName = 'Scott';
$michael->Email = 'michael@dundermifflin.com';
$result = $michael->create();
$michael = Contact::queryById($result['id']);
echo "Michael:\tThat's what she said!\n";

$dwight = new Contact();
$dwight->AccountId = $paperCompany->Id;
$dwight->FirstName = 'Dwight';
$dwight->LastName = 'Schrute';
$dwight->Email = 'dwight@dundermifflin.com';
$dwight->ReportsToId = $michael->Id;
$result = $dwight->create();
$dwight = Contact::queryById($result['id']);
echo "Dwight:\t\tToday, smoking is going to save lives.\n";

$dwight->ReportsToId = null;
$dwight->upsert();
$michael->delete();
echo "Michael:\tWhy am I so sad? Am I doing the wrong thing?\n";
echo "Dwight:\t\tI'm the regional manager!\n";

// clean up
$dwight->delete();
$paperCompany->delete();

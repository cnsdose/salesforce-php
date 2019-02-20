<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class DatacloudContact
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method DatacloudContact[] query()
 *
 * @property string $Id
 * @property mixed $CurrencyIsoCode
 * @property string $ExternalId
 * @property string $CompanyId
 * @property string $ContactId
 * @property string $CompanyName
 * @property string $Title
 * @property bool $IsInactive
 * @property string $FirstName
 * @property string $LastName
 * @property mixed $Phone
 * @property mixed $Email
 * @property string $Street
 * @property string $City
 * @property string $State
 * @property string $Country
 * @property string $Zip
 * @property mixed $Department
 * @property mixed $Level
 * @property bool $IsOwned
 * @property \Carbon\Carbon $UpdatedDate
 * @property bool $IsInCrm
 */
class DatacloudContact extends BaseRecordModel
{
    public static $objectApiName = 'DatacloudContact';
    protected $defaultFields = [
        'Id' => null,
        'CurrencyIsoCode' => null,
        'ExternalId' => null,
        'CompanyId' => null,
        'ContactId' => null,
        'CompanyName' => null,
        'Title' => null,
        'IsInactive' => 'bool',
        'FirstName' => null,
        'LastName' => null,
        'Phone' => null,
        'Email' => null,
        'Street' => null,
        'City' => null,
        'State' => null,
        'Country' => null,
        'Zip' => null,
        'Department' => null,
        'Level' => null,
        'IsOwned' => 'bool',
        'UpdatedDate' => 'datetime',
        'IsInCrm' => 'bool',
    ];
}

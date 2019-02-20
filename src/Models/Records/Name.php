<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class Name
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method Name[] query()
 *
 * @property string $Id
 * @property string $Name
 * @property string $LastName
 * @property string $FirstName
 * @property mixed $Type
 * @property string $Alias
 * @property string $UserRoleId
 * @property string $RecordTypeId
 * @property bool $IsActive
 * @property string $ProfileId
 * @property string $Title
 * @property mixed $Email
 * @property mixed $Phone
 * @property string $NameOrAlias
 * @property string $Username
 * @property \Carbon\Carbon $LastViewedDate
 * @property \Carbon\Carbon $LastReferencedDate
 */
class Name extends BaseRecordModel
{
    public static $objectApiName = 'Name';
    protected $defaultFields = [
        'Id' => null,
        'Name' => null,
        'LastName' => null,
        'FirstName' => null,
        'Type' => null,
        'Alias' => null,
        'UserRoleId' => null,
        'RecordTypeId' => null,
        'IsActive' => 'bool',
        'ProfileId' => null,
        'Title' => null,
        'Email' => null,
        'Phone' => null,
        'NameOrAlias' => null,
        'Username' => null,
        'LastViewedDate' => 'datetime',
        'LastReferencedDate' => 'datetime',
    ];
}

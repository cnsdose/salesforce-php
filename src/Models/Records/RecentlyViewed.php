<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class RecentlyViewed
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method RecentlyViewed[] query()
 *
 * @property string $Id
 * @property string $Name
 * @property string $LastName
 * @property string $FirstName
 * @property string $MiddleName
 * @property string $Suffix
 * @property string $Type
 * @property string $Alias
 * @property string $UserRoleId
 * @property string $RecordTypeId
 * @property bool $IsActive
 * @property string $ProfileId
 * @property string $Title
 * @property mixed $Email
 * @property mixed $Phone
 * @property string $NameOrAlias
 * @property \Carbon\Carbon $LastViewedDate
 * @property \Carbon\Carbon $LastReferencedDate
 * @property string $Language
 */
class RecentlyViewed extends BaseRecordModel
{
    public static $objectApiName = 'RecentlyViewed';
    protected $defaultFields = [
        'Id' => null,
        'Name' => null,
        'LastName' => null,
        'FirstName' => null,
        'MiddleName' => null,
        'Suffix' => null,
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
        'LastViewedDate' => 'datetime',
        'LastReferencedDate' => 'datetime',
        'Language' => null,
    ];
}

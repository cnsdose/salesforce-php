<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class RecordType
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method RecordType[] query()
 *
 * @property string $Id
 * @property string $Name
 * @property string $DeveloperName
 * @property string $NamespacePrefix
 * @property string $Description
 * @property string $BusinessProcessId
 * @property string $SobjectType
 * @property bool $IsActive
 * @property string $CreatedById
 * @property \Carbon\Carbon $CreatedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property \Carbon\Carbon $SystemModstamp
 */
class RecordType extends BaseRecordModel
{
    public static $objectApiName = 'RecordType';
    protected $defaultFields = [
        'Id' => null,
        'Name' => null,
        'DeveloperName' => null,
        'NamespacePrefix' => null,
        'Description' => null,
        'BusinessProcessId' => null,
        'SobjectType' => null,
        'IsActive' => 'bool',
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'LastModifiedById' => null,
        'LastModifiedDate' => 'datetime',
        'SystemModstamp' => 'datetime',
    ];
}

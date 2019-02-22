<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class BusinessProcess
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method BusinessProcess[] query()
 *
 * @property string $Id
 * @property string $Name
 * @property string $NamespacePrefix
 * @property string $Description
 * @property string $TableEnumOrId
 * @property bool $IsActive
 * @property string $CreatedById
 * @property \Carbon\Carbon $CreatedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property \Carbon\Carbon $SystemModstamp
 */
class BusinessProcess extends BaseRecordModel
{
    public static $objectApiName = 'BusinessProcess';
    protected $defaultFields = [
        'Id' => null,
        'Name' => null,
        'NamespacePrefix' => null,
        'Description' => null,
        'TableEnumOrId' => null,
        'IsActive' => 'bool',
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'LastModifiedById' => null,
        'LastModifiedDate' => 'datetime',
        'SystemModstamp' => 'datetime',
    ];
}

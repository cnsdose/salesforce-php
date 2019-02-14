<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class Folder
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method Folder[] query()
 *
 * @property string Id
 * @property string ParentId
 * @property string Name
 * @property string DeveloperName
 * @property mixed AccessType
 * @property bool IsReadonly
 * @property mixed Type
 * @property string NamespacePrefix
 * @property \Carbon\Carbon CreatedDate
 * @property string CreatedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property string LastModifiedById
 * @property \Carbon\Carbon SystemModstamp
 */
class Folder extends BaseRecordModel
{
    protected static $objectApiName = 'Folder';
    protected $defaultFields = [
        'Id' => null,
        'ParentId' => null,
        'Name' => null,
        'DeveloperName' => null,
        'AccessType' => null,
        'IsReadonly' => 'bool',
        'Type' => null,
        'NamespacePrefix' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
    ];
}

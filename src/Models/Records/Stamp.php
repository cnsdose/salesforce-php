<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class Stamp
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method Stamp[] query()
 *
 * @property string Id
 * @property bool IsDeleted
 * @property string ParentId
 * @property string MasterLabel
 * @property \Carbon\Carbon CreatedDate
 * @property string CreatedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property string LastModifiedById
 * @property \Carbon\Carbon SystemModstamp
 * @property string Description
 */
class Stamp extends BaseRecordModel
{
    protected static $objectApiName = 'Stamp';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'ParentId' => null,
        'MasterLabel' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'Description' => null,
    ];
}

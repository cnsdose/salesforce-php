<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class CollaborationGroupRecord
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method CollaborationGroupRecord[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $CollaborationGroupId
 * @property string $RecordId
 */
class CollaborationGroupRecord extends BaseRecordModel
{
    public static $objectApiName = 'CollaborationGroupRecord';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'CollaborationGroupId' => null,
        'RecordId' => null,
    ];
}

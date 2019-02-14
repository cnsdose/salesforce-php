<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class Note
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method Note[] query()
 *
 * @property string Id
 * @property bool IsDeleted
 * @property string ParentId
 * @property string Title
 * @property bool IsPrivate
 * @property string Body
 * @property string OwnerId
 * @property \Carbon\Carbon CreatedDate
 * @property string CreatedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property string LastModifiedById
 * @property \Carbon\Carbon SystemModstamp
 */
class Note extends BaseRecordModel
{
    protected static $objectApiName = 'Note';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'ParentId' => null,
        'Title' => null,
        'IsPrivate' => 'bool',
        'Body' => null,
        'OwnerId' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
    ];
}

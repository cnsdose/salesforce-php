<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class NoteAndAttachment
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method NoteAndAttachment[] query()
 *
 * @property string Id
 * @property bool IsDeleted
 * @property bool IsNote
 * @property string ParentId
 * @property string Title
 * @property bool IsPrivate
 * @property string OwnerId
 * @property \Carbon\Carbon CreatedDate
 * @property string CreatedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property string LastModifiedById
 * @property \Carbon\Carbon SystemModstamp
 */
class NoteAndAttachment extends BaseRecordModel
{
    protected static $objectApiName = 'NoteAndAttachment';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'IsNote' => 'bool',
        'ParentId' => null,
        'Title' => null,
        'IsPrivate' => 'bool',
        'OwnerId' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
    ];
}

<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class CaseComment
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method CaseComment[] query()
 *
 * @property string Id
 * @property string ParentId
 * @property bool IsPublished
 * @property string CommentBody
 * @property string CreatedById
 * @property \Carbon\Carbon CreatedDate
 * @property \Carbon\Carbon SystemModstamp
 * @property \Carbon\Carbon LastModifiedDate
 * @property string LastModifiedById
 * @property bool IsDeleted
 */
class CaseComment extends BaseRecordModel
{
    protected static $objectApiName = 'CaseComment';
    protected $defaultFields = [
        'Id' => null,
        'ParentId' => null,
        'IsPublished' => 'bool',
        'CommentBody' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'SystemModstamp' => 'datetime',
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'IsDeleted' => 'bool',
    ];
}

<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Support;

use CNSDose\Salesforce\Models\BaseModel;

/**
 * Class CaseComment
 * @package CNSDose\Salesforce\Models\Support
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
class CaseComment extends BaseModel
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

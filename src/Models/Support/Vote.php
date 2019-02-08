<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Support;

use CNSDose\Salesforce\Models\BaseModel;

/**
 * Class Vote
 * @package CNSDose\Salesforce\Models\Support
 *
 * @method Vote[] query()
 *
 * @property string Id
 * @property bool IsDeleted
 * @property string ParentId
 * @property mixed Type
 * @property \Carbon\Carbon CreatedDate
 * @property string CreatedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property string LastModifiedById
 * @property \Carbon\Carbon SystemModstamp
 */
class Vote extends BaseModel
{
    protected static $objectApiName = 'Vote';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'ParentId' => null,
        'Type' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
    ];
}

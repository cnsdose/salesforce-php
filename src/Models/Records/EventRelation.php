<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class EventRelation
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method EventRelation[] query()
 *
 * @property string $Id
 * @property string $RelationId
 * @property string $EventId
 * @property bool $IsWhat
 * @property bool $IsParent
 * @property bool $IsInvitee
 * @property string $AccountId
 * @property string $Status
 * @property \Carbon\Carbon $RespondedDate
 * @property string $Response
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property bool $IsDeleted
 */
class EventRelation extends BaseRecordModel
{
    public static $objectApiName = 'EventRelation';
    protected $defaultFields = [
        'Id' => null,
        'RelationId' => null,
        'EventId' => null,
        'IsWhat' => 'bool',
        'IsParent' => 'bool',
        'IsInvitee' => 'bool',
        'AccountId' => null,
        'Status' => null,
        'RespondedDate' => 'datetime',
        'Response' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'IsDeleted' => 'bool',
    ];
}

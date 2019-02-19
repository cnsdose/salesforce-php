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
 * @property string Id
 * @property string RelationId
 * @property string EventId
 * @property mixed Status
 * @property \Carbon\Carbon RespondedDate
 * @property string Response
 * @property \Carbon\Carbon CreatedDate
 * @property string CreatedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property string LastModifiedById
 * @property \Carbon\Carbon SystemModstamp
 * @property bool IsDeleted
 */
class EventRelation extends BaseRecordModel
{
    protected static $objectApiName = 'EventRelation';
    protected $defaultFields = [
        'Id' => null,
        'RelationId' => null,
        'EventId' => null,
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
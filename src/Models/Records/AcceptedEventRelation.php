<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class AcceptedEventRelation
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method AcceptedEventRelation[] query()
 *
 * @property string $Id
 * @property string $RelationId
 * @property string $EventId
 * @property string $AccountId
 * @property \Carbon\Carbon $RespondedDate
 * @property string $Response
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property bool $IsDeleted
 * @property string $Type
 */
class AcceptedEventRelation extends BaseRecordModel
{
    public static $objectApiName = 'AcceptedEventRelation';
    protected $defaultFields = [
        'Id' => null,
        'RelationId' => null,
        'EventId' => null,
        'AccountId' => null,
        'RespondedDate' => 'datetime',
        'Response' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'IsDeleted' => 'bool',
        'Type' => null,
    ];
}

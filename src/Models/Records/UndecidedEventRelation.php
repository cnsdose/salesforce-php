<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class UndecidedEventRelation
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method UndecidedEventRelation[] query()
 *
 * @property string $Id
 * @property string $RelationId
 * @property string $EventId
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
class UndecidedEventRelation extends BaseRecordModel
{
    public static $objectApiName = 'UndecidedEventRelation';
    protected $defaultFields = [
        'Id' => null,
        'RelationId' => null,
        'EventId' => null,
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

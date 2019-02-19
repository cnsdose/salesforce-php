<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class EmailMessageRelation
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method EmailMessageRelation[] query()
 *
 * @property string $Id
 * @property string $EmailMessageId
 * @property string $RelationId
 * @property mixed $RelationType
 * @property string $RelationAddress
 * @property string $RelationObjectType
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property bool $IsDeleted
 */
class EmailMessageRelation extends BaseRecordModel
{
    protected static $objectApiName = 'EmailMessageRelation';
    protected $defaultFields = [
        'Id' => null,
        'EmailMessageId' => null,
        'RelationId' => null,
        'RelationType' => null,
        'RelationAddress' => null,
        'RelationObjectType' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'SystemModstamp' => 'datetime',
        'IsDeleted' => 'bool',
    ];
}

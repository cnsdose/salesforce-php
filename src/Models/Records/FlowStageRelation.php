<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class FlowStageRelation
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method FlowStageRelation[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $Name
 * @property mixed $CurrencyIsoCode
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $ParentId
 * @property mixed $StageOrder
 * @property mixed $StageType
 * @property string $StageLabel
 * @property string $FlexIndex
 */
class FlowStageRelation extends BaseRecordModel
{
    protected static $objectApiName = 'FlowStageRelation';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'Name' => null,
        'CurrencyIsoCode' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'ParentId' => null,
        'StageOrder' => null,
        'StageType' => null,
        'StageLabel' => null,
        'FlexIndex' => null,
    ];
}

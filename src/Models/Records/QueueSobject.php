<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class QueueSobject
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method QueueSobject[] query()
 *
 * @property string $Id
 * @property string $QueueId
 * @property mixed $SobjectType
 * @property string $CreatedById
 * @property \Carbon\Carbon $SystemModstamp
 */
class QueueSobject extends BaseRecordModel
{
    public static $objectApiName = 'QueueSobject';
    protected $defaultFields = [
        'Id' => null,
        'QueueId' => null,
        'SobjectType' => null,
        'CreatedById' => null,
        'SystemModstamp' => 'datetime',
    ];
}

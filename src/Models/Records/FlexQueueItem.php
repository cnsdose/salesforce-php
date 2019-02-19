<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class FlexQueueItem
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method FlexQueueItem[] query()
 *
 * @property string $Id
 * @property string $FlexQueueItemId
 * @property mixed $JobType
 * @property string $AsyncApexJobId
 * @property mixed $JobPosition
 */
class FlexQueueItem extends BaseRecordModel
{
    protected static $objectApiName = 'FlexQueueItem';
    protected $defaultFields = [
        'Id' => null,
        'FlexQueueItemId' => null,
        'JobType' => null,
        'AsyncApexJobId' => null,
        'JobPosition' => null,
    ];
}

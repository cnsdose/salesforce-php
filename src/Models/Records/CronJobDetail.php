<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class CronJobDetail
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method CronJobDetail[] query()
 *
 * @property string Id
 * @property string Name
 * @property mixed JobType
 */
class CronJobDetail extends BaseRecordModel
{
    protected static $objectApiName = 'CronJobDetail';
    protected $defaultFields = [
        'Id' => null,
        'Name' => null,
        'JobType' => null,
    ];
}

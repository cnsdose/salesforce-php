<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class EmailStatus
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method EmailStatus[] query()
 *
 * @property string $Id
 * @property string $TaskId
 * @property string $WhoId
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property mixed $TimesOpened
 * @property \Carbon\Carbon $FirstOpenDate
 * @property \Carbon\Carbon $LastOpenDate
 * @property string $EmailTemplateName
 */
class EmailStatus extends BaseRecordModel
{
    protected static $objectApiName = 'EmailStatus';
    protected $defaultFields = [
        'Id' => null,
        'TaskId' => null,
        'WhoId' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'TimesOpened' => null,
        'FirstOpenDate' => 'datetime',
        'LastOpenDate' => 'datetime',
        'EmailTemplateName' => null,
    ];
}

<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ApexLog
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ApexLog[] query()
 *
 * @property string $Id
 * @property string $LogUserId
 * @property mixed $LogLength
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $Request
 * @property string $Operation
 * @property string $Application
 * @property string $Status
 * @property mixed $DurationMilliseconds
 * @property \Carbon\Carbon $SystemModstamp
 * @property \Carbon\Carbon $StartTime
 * @property mixed $Location
 */
class ApexLog extends BaseRecordModel
{
    protected static $objectApiName = 'ApexLog';
    protected $defaultFields = [
        'Id' => null,
        'LogUserId' => null,
        'LogLength' => null,
        'LastModifiedDate' => 'datetime',
        'Request' => null,
        'Operation' => null,
        'Application' => null,
        'Status' => null,
        'DurationMilliseconds' => null,
        'SystemModstamp' => 'datetime',
        'StartTime' => 'datetime',
        'Location' => null,
    ];
}

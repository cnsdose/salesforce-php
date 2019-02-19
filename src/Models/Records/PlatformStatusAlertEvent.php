<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class PlatformStatusAlertEvent
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method PlatformStatusAlertEvent[] query()
 *
 * @property string $ReplayId
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property string $EventIdentifier
 * @property string $UserId
 * @property string $Username
 * @property \Carbon\Carbon $EventDate
 * @property string $RelatedEventIdentifier
 * @property string $RequestId
 * @property string $ServiceName
 * @property string $ServiceJobId
 * @property string $StatusType
 * @property string $ComponentName
 * @property string $SubComponentName
 * @property string $Subject
 * @property string $ApiErrorCode
 * @property string $ExtendedErrorCode
 */
class PlatformStatusAlertEvent extends BaseRecordModel
{
    protected static $objectApiName = 'PlatformStatusAlertEvent';
    protected $defaultFields = [
        'ReplayId' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'EventIdentifier' => null,
        'UserId' => null,
        'Username' => null,
        'EventDate' => 'datetime',
        'RelatedEventIdentifier' => null,
        'RequestId' => null,
        'ServiceName' => null,
        'ServiceJobId' => null,
        'StatusType' => null,
        'ComponentName' => null,
        'SubComponentName' => null,
        'Subject' => null,
        'ApiErrorCode' => null,
        'ExtendedErrorCode' => null,
    ];
}

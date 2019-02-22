<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class VerificationHistory
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method VerificationHistory[] query()
 *
 * @property string $Id
 * @property mixed $EventGroup
 * @property \Carbon\Carbon $VerificationTime
 * @property string $VerificationMethod
 * @property string $UserId
 * @property string $Activity
 * @property string $Status
 * @property string $LoginHistoryId
 * @property string $SourceIp
 * @property string $LoginGeoId
 * @property string $Remarks
 * @property string $ResourceId
 * @property string $Policy
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property bool $IsDeleted
 * @property \Carbon\Carbon $SystemModstamp
 */
class VerificationHistory extends BaseRecordModel
{
    public static $objectApiName = 'VerificationHistory';
    protected $defaultFields = [
        'Id' => null,
        'EventGroup' => null,
        'VerificationTime' => 'datetime',
        'VerificationMethod' => null,
        'UserId' => null,
        'Activity' => null,
        'Status' => null,
        'LoginHistoryId' => null,
        'SourceIp' => null,
        'LoginGeoId' => null,
        'Remarks' => null,
        'ResourceId' => null,
        'Policy' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedById' => null,
        'LastModifiedDate' => 'datetime',
        'IsDeleted' => 'bool',
        'SystemModstamp' => 'datetime',
    ];
}

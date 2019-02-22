<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class WorkType
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method WorkType[] query()
 *
 * @property string $Id
 * @property string $OwnerId
 * @property bool $IsDeleted
 * @property string $Name
 * @property string $CurrencyIsoCode
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property \Carbon\Carbon $LastViewedDate
 * @property \Carbon\Carbon $LastReferencedDate
 * @property string $Description
 * @property float $EstimatedDuration
 * @property string $DurationType
 * @property float $DurationInMinutes
 * @property bool $ShouldAutoCreateSvcAppt
 * @property string $ServiceReportTemplateId
 * @property mixed $MinimumCrewSize
 * @property mixed $RecommendedCrewSize
 */
class WorkType extends BaseRecordModel
{
    public static $objectApiName = 'WorkType';
    protected $defaultFields = [
        'Id' => null,
        'OwnerId' => null,
        'IsDeleted' => 'bool',
        'Name' => null,
        'CurrencyIsoCode' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'LastViewedDate' => 'datetime',
        'LastReferencedDate' => 'datetime',
        'Description' => null,
        'EstimatedDuration' => 'number:16,2',
        'DurationType' => null,
        'DurationInMinutes' => 'number:16,2',
        'ShouldAutoCreateSvcAppt' => 'bool',
        'ServiceReportTemplateId' => null,
        'MinimumCrewSize' => null,
        'RecommendedCrewSize' => null,
    ];
}

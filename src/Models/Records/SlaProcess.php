<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class SlaProcess
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method SlaProcess[] query()
 *
 * @property string $Id
 * @property string $Name
 * @property string $NameNorm
 * @property string $Description
 * @property bool $IsActive
 * @property string $StartDateField
 * @property string $SobjectType
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property bool $IsDeleted
 * @property string $BusinessHoursId
 * @property \Carbon\Carbon $LastViewedDate
 */
class SlaProcess extends BaseRecordModel
{
    public static $objectApiName = 'SlaProcess';
    protected $defaultFields = [
        'Id' => null,
        'Name' => null,
        'NameNorm' => null,
        'Description' => null,
        'IsActive' => 'bool',
        'StartDateField' => null,
        'SobjectType' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'IsDeleted' => 'bool',
        'BusinessHoursId' => null,
        'LastViewedDate' => 'datetime',
    ];
}

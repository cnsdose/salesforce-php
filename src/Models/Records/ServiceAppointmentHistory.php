<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ServiceAppointmentHistory
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ServiceAppointmentHistory[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $ServiceAppointmentId
 * @property string $CreatedById
 * @property \Carbon\Carbon $CreatedDate
 * @property mixed $Field
 * @property mixed $OldValue
 * @property mixed $NewValue
 */
class ServiceAppointmentHistory extends BaseRecordModel
{
    protected static $objectApiName = 'ServiceAppointmentHistory';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'ServiceAppointmentId' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'Field' => null,
        'OldValue' => null,
        'NewValue' => null,
    ];
}

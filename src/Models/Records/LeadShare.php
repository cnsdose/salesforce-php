<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class LeadShare
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method LeadShare[] query()
 *
 * @property string $Id
 * @property string $LeadId
 * @property string $UserOrGroupId
 * @property mixed $LeadAccessLevel
 * @property mixed $RowCause
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property bool $IsDeleted
 */
class LeadShare extends BaseRecordModel
{
    public static $objectApiName = 'LeadShare';
    protected $defaultFields = [
        'Id' => null,
        'LeadId' => null,
        'UserOrGroupId' => null,
        'LeadAccessLevel' => null,
        'RowCause' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'IsDeleted' => 'bool',
    ];
}

<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class MilestoneType
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method MilestoneType[] query()
 *
 * @property string $Id
 * @property string $Name
 * @property string $Description
 * @property mixed $RecurrenceType
 * @property \Carbon\Carbon $SystemModstamp
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 */
class MilestoneType extends BaseRecordModel
{
    protected static $objectApiName = 'MilestoneType';
    protected $defaultFields = [
        'Id' => null,
        'Name' => null,
        'Description' => null,
        'RecurrenceType' => null,
        'SystemModstamp' => 'datetime',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
    ];
}

<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class Calendar
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method Calendar[] query()
 *
 * @property string Id
 * @property string Name
 * @property string UserId
 * @property mixed Type
 * @property bool IsActive
 * @property \Carbon\Carbon CreatedDate
 * @property string CreatedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property string LastModifiedById
 * @property \Carbon\Carbon SystemModstamp
 */
class Calendar extends BaseRecordModel
{
    protected static $objectApiName = 'Calendar';
    protected $defaultFields = [
        'Id' => null,
        'Name' => null,
        'UserId' => null,
        'Type' => null,
        'IsActive' => 'bool',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
    ];
}

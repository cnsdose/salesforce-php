<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ServiceCrewShare
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ServiceCrewShare[] query()
 *
 * @property string Id
 * @property string ParentId
 * @property string UserOrGroupId
 * @property mixed AccessLevel
 * @property mixed RowCause
 * @property \Carbon\Carbon LastModifiedDate
 * @property string LastModifiedById
 * @property bool IsDeleted
 */
class ServiceCrewShare extends BaseRecordModel
{
    protected static $objectApiName = 'ServiceCrewShare';
    protected $defaultFields = [
        'Id' => null,
        'ParentId' => null,
        'UserOrGroupId' => null,
        'AccessLevel' => null,
        'RowCause' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'IsDeleted' => 'bool',
    ];
}
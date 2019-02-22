<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class UserListView
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method UserListView[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $UserId
 * @property string $ListViewId
 * @property string $SobjectType
 * @property string $LastViewedChart
 */
class UserListView extends BaseRecordModel
{
    public static $objectApiName = 'UserListView';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'UserId' => null,
        'ListViewId' => null,
        'SobjectType' => null,
        'LastViewedChart' => null,
    ];
}

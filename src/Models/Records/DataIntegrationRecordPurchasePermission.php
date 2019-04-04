<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class DataIntegrationRecordPurchasePermission
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method DataIntegrationRecordPurchasePermission[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $UserId
 * @property string $ExternalObject
 * @property mixed $UserRecordPurchaseLimit
 */
class DataIntegrationRecordPurchasePermission extends BaseRecordModel
{
    public static $objectApiName = 'DataIntegrationRecordPurchasePermission';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'UserId' => null,
        'ExternalObject' => null,
        'UserRecordPurchaseLimit' => null,
    ];
}

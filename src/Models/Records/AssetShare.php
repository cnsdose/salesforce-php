<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class AssetShare
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method AssetShare[] query()
 *
 * @property string $Id
 * @property string $AssetId
 * @property string $UserOrGroupId
 * @property string $AssetAccessLevel
 * @property string $RowCause
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property bool $IsDeleted
 */
class AssetShare extends BaseRecordModel
{
    public static $objectApiName = 'AssetShare';
    protected $defaultFields = [
        'Id' => null,
        'AssetId' => null,
        'UserOrGroupId' => null,
        'AssetAccessLevel' => null,
        'RowCause' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'IsDeleted' => 'bool',
    ];
}

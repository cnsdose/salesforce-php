<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class CustomBrandAsset
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method CustomBrandAsset[] query()
 *
 * @property string $Id
 * @property string $CustomBrandId
 * @property string $AssetCategory
 * @property string $TextAsset
 * @property string $AssetSourceId
 * @property string $CreatedById
 * @property \Carbon\Carbon $CreatedDate
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 */
class CustomBrandAsset extends BaseRecordModel
{
    public static $objectApiName = 'CustomBrandAsset';
    protected $defaultFields = [
        'Id' => null,
        'CustomBrandId' => null,
        'AssetCategory' => null,
        'TextAsset' => null,
        'AssetSourceId' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
    ];
}

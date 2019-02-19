<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class CustomBrand
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method CustomBrand[] query()
 *
 * @property string $Id
 * @property string $ParentId
 * @property string $CreatedById
 * @property \Carbon\Carbon $CreatedDate
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 */
class CustomBrand extends BaseRecordModel
{
    protected static $objectApiName = 'CustomBrand';
    protected $defaultFields = [
        'Id' => null,
        'ParentId' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
    ];
}

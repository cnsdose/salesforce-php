<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Support;

use CNSDose\Salesforce\Models\BaseModel;

/**
 * Class CategoryData
 * @package CNSDose\Salesforce\Models\Support
 *
 * @method CategoryData[] query()
 *
 * @property string Id
 * @property string CategoryNodeId
 * @property string RelatedSobjectId
 * @property bool IsDeleted
 * @property \Carbon\Carbon CreatedDate
 * @property string CreatedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property string LastModifiedById
 * @property \Carbon\Carbon SystemModstamp
 */
class CategoryData extends BaseModel
{
    protected static $objectApiName = 'CategoryData';
    protected $defaultFields = [
        'Id' => null,
        'CategoryNodeId' => null,
        'RelatedSobjectId' => null,
        'IsDeleted' => 'bool',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
    ];
}

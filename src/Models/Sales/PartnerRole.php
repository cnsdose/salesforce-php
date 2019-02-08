<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Sales;

use CNSDose\Salesforce\Models\BaseModel;

/**
 * Class PartnerRole
 * @package CNSDose\Salesforce\Models\Sales
 *
 * @method PartnerRole[] query()
 *
 * @property string Id
 * @property string MasterLabel
 * @property string ApiName
 * @property mixed SortOrder
 * @property mixed ReverseRole
 * @property string CreatedById
 * @property \Carbon\Carbon CreatedDate
 * @property string LastModifiedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property \Carbon\Carbon SystemModstamp
 */
class PartnerRole extends BaseModel
{
    protected static $objectApiName = 'PartnerRole';
    protected $defaultFields = [
        'Id' => null,
        'MasterLabel' => null,
        'ApiName' => null,
        'SortOrder' => null,
        'ReverseRole' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'LastModifiedById' => null,
        'LastModifiedDate' => 'datetime',
        'SystemModstamp' => 'datetime',
    ];
}

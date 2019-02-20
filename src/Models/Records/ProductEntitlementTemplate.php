<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ProductEntitlementTemplate
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ProductEntitlementTemplate[] query()
 *
 * @property string $Id
 * @property string $Product2Id
 * @property string $EntitlementTemplateId
 * @property \Carbon\Carbon $SystemModstamp
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 */
class ProductEntitlementTemplate extends BaseRecordModel
{
    public static $objectApiName = 'ProductEntitlementTemplate';
    protected $defaultFields = [
        'Id' => null,
        'Product2Id' => null,
        'EntitlementTemplateId' => null,
        'SystemModstamp' => 'datetime',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
    ];
}

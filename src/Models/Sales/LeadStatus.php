<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Sales;

use CNSDose\Salesforce\Models\BaseModel;

/**
 * Class LeadStatus
 * @package CNSDose\Salesforce\Models\Sales
 *
 * @method LeadStatus[] query()
 *
 * @property string Id
 * @property string MasterLabel
 * @property string ApiName
 * @property mixed SortOrder
 * @property bool IsDefault
 * @property bool IsConverted
 * @property string CreatedById
 * @property \Carbon\Carbon CreatedDate
 * @property string LastModifiedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property \Carbon\Carbon SystemModstamp
 */
class LeadStatus extends BaseModel
{
    protected static $objectApiName = 'LeadStatus';
    protected $defaultFields = [
        'Id' => null,
        'MasterLabel' => null,
        'ApiName' => null,
        'SortOrder' => null,
        'IsDefault' => 'bool',
        'IsConverted' => 'bool',
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'LastModifiedById' => null,
        'LastModifiedDate' => 'datetime',
        'SystemModstamp' => 'datetime',
    ];
}

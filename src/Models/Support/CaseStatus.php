<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Support;

use CNSDose\Salesforce\Models\BaseModel;

/**
 * Class CaseStatus
 * @package CNSDose\Salesforce\Models\Support
 *
 * @method CaseStatus[] query()
 *
 * @property string Id
 * @property string MasterLabel
 * @property string ApiName
 * @property mixed SortOrder
 * @property bool IsDefault
 * @property bool IsClosed
 * @property string CreatedById
 * @property \Carbon\Carbon CreatedDate
 * @property string LastModifiedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property \Carbon\Carbon SystemModstamp
 */
class CaseStatus extends BaseModel
{
    protected static $objectApiName = 'CaseStatus';
    protected $defaultFields = [
        'Id' => null,
        'MasterLabel' => null,
        'ApiName' => null,
        'SortOrder' => null,
        'IsDefault' => 'bool',
        'IsClosed' => 'bool',
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'LastModifiedById' => null,
        'LastModifiedDate' => 'datetime',
        'SystemModstamp' => 'datetime',
    ];
}

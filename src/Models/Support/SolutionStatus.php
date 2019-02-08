<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Support;

use CNSDose\Salesforce\Models\BaseModel;

/**
 * Class SolutionStatus
 * @package CNSDose\Salesforce\Models\Support
 *
 * @method SolutionStatus[] query()
 *
 * @property string Id
 * @property string MasterLabel
 * @property string ApiName
 * @property mixed SortOrder
 * @property bool IsDefault
 * @property bool IsReviewed
 * @property string CreatedById
 * @property \Carbon\Carbon CreatedDate
 * @property string LastModifiedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property \Carbon\Carbon SystemModstamp
 */
class SolutionStatus extends BaseModel
{
    protected static $objectApiName = 'SolutionStatus';
    protected $defaultFields = [
        'Id' => null,
        'MasterLabel' => null,
        'ApiName' => null,
        'SortOrder' => null,
        'IsDefault' => 'bool',
        'IsReviewed' => 'bool',
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'LastModifiedById' => null,
        'LastModifiedDate' => 'datetime',
        'SystemModstamp' => 'datetime',
    ];
}

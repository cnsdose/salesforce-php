<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class BackgroundOperationResult
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method BackgroundOperationResult[] query()
 *
 * @property string $Id
 * @property string $ParentId
 * @property string $Data
 * @property string $Message
 * @property string $MessageType
 * @property string $CreatedById
 * @property \Carbon\Carbon $CreatedDate
 */
class BackgroundOperationResult extends BaseRecordModel
{
    public static $objectApiName = 'BackgroundOperationResult';
    protected $defaultFields = [
        'Id' => null,
        'ParentId' => null,
        'Data' => null,
        'Message' => null,
        'MessageType' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
    ];
}

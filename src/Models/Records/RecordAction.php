<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class RecordAction
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method RecordAction[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $CurrencyIsoCode
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $RecordId
 * @property string $FlowDefinition
 * @property string $FlowInterviewId
 * @property mixed $Order
 * @property string $Status
 * @property string $Pinned
 * @property string $ActionDefinition
 * @property bool $IsMandatory
 * @property bool $IsUiRemoveHidden
 */
class RecordAction extends BaseRecordModel
{
    public static $objectApiName = 'RecordAction';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'CurrencyIsoCode' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'RecordId' => null,
        'FlowDefinition' => null,
        'FlowInterviewId' => null,
        'Order' => null,
        'Status' => null,
        'Pinned' => null,
        'ActionDefinition' => null,
        'IsMandatory' => 'bool',
        'IsUiRemoveHidden' => 'bool',
    ];
}

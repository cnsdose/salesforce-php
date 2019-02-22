<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class RecordActionHistory
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method RecordActionHistory[] query()
 *
 * @property string $Id
 * @property string $CreatedById
 * @property \Carbon\Carbon $CreatedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $ParentRecordId
 * @property string $ActionDefinitionApiName
 * @property string $ActionDefinitionLabel
 * @property string $ActionType
 * @property string $State
 * @property string $UserId
 * @property string $RecordActionId
 * @property \Carbon\Carbon $LoggedTime
 * @property string $Pinned
 * @property bool $IsMandatory
 */
class RecordActionHistory extends BaseRecordModel
{
    public static $objectApiName = 'RecordActionHistory';
    protected $defaultFields = [
        'Id' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'LastModifiedById' => null,
        'LastModifiedDate' => 'datetime',
        'SystemModstamp' => 'datetime',
        'ParentRecordId' => null,
        'ActionDefinitionApiName' => null,
        'ActionDefinitionLabel' => null,
        'ActionType' => null,
        'State' => null,
        'UserId' => null,
        'RecordActionId' => null,
        'LoggedTime' => 'datetime',
        'Pinned' => null,
        'IsMandatory' => 'bool',
    ];
}

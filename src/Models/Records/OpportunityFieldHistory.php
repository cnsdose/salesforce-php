<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class OpportunityFieldHistory
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method OpportunityFieldHistory[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $OpportunityId
 * @property string $CreatedById
 * @property \Carbon\Carbon $CreatedDate
 * @property string $Field
 * @property mixed $OldValue
 * @property mixed $NewValue
 */
class OpportunityFieldHistory extends BaseRecordModel
{
    public static $objectApiName = 'OpportunityFieldHistory';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'OpportunityId' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'Field' => null,
        'OldValue' => null,
        'NewValue' => null,
    ];
}

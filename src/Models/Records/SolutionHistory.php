<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class SolutionHistory
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method SolutionHistory[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $SolutionId
 * @property string $CreatedById
 * @property \Carbon\Carbon $CreatedDate
 * @property string $Field
 * @property mixed $OldValue
 * @property mixed $NewValue
 */
class SolutionHistory extends BaseRecordModel
{
    public static $objectApiName = 'SolutionHistory';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'SolutionId' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'Field' => null,
        'OldValue' => null,
        'NewValue' => null,
    ];
}

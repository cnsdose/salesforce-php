<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class IndividualHistory
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method IndividualHistory[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $IndividualId
 * @property string $CreatedById
 * @property \Carbon\Carbon $CreatedDate
 * @property string $Field
 * @property mixed $OldValue
 * @property mixed $NewValue
 */
class IndividualHistory extends BaseRecordModel
{
    public static $objectApiName = 'IndividualHistory';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'IndividualId' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'Field' => null,
        'OldValue' => null,
        'NewValue' => null,
    ];
}

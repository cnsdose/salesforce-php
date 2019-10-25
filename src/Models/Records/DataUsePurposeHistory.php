<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class DataUsePurposeHistory
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method DataUsePurposeHistory[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $DataUsePurposeId
 * @property string $CreatedById
 * @property \Carbon\Carbon $CreatedDate
 * @property string $Field
 * @property mixed $OldValue
 * @property mixed $NewValue
 */
class DataUsePurposeHistory extends BaseRecordModel
{
    public static $objectApiName = 'DataUsePurposeHistory';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'DataUsePurposeId' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'Field' => null,
        'OldValue' => null,
        'NewValue' => null,
    ];
}

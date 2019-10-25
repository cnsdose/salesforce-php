<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class DataUseLegalBasisHistory
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method DataUseLegalBasisHistory[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $DataUseLegalBasisId
 * @property string $CreatedById
 * @property \Carbon\Carbon $CreatedDate
 * @property string $Field
 * @property mixed $OldValue
 * @property mixed $NewValue
 */
class DataUseLegalBasisHistory extends BaseRecordModel
{
    public static $objectApiName = 'DataUseLegalBasisHistory';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'DataUseLegalBasisId' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'Field' => null,
        'OldValue' => null,
        'NewValue' => null,
    ];
}

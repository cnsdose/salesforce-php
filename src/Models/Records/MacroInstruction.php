<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class MacroInstruction
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method MacroInstruction[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $Name
 * @property mixed $CurrencyIsoCode
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $MacroId
 * @property mixed $Operation
 * @property mixed $Target
 * @property string $Value
 * @property string $ValueRecord
 * @property mixed $SortOrder
 */
class MacroInstruction extends BaseRecordModel
{
    public static $objectApiName = 'MacroInstruction';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'Name' => null,
        'CurrencyIsoCode' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'MacroId' => null,
        'Operation' => null,
        'Target' => null,
        'Value' => null,
        'ValueRecord' => null,
        'SortOrder' => null,
    ];
}

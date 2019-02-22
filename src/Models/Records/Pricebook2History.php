<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class Pricebook2History
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method Pricebook2History[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $Pricebook2Id
 * @property string $CreatedById
 * @property \Carbon\Carbon $CreatedDate
 * @property string $Field
 * @property mixed $OldValue
 * @property mixed $NewValue
 */
class Pricebook2History extends BaseRecordModel
{
    public static $objectApiName = 'Pricebook2History';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'Pricebook2Id' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'Field' => null,
        'OldValue' => null,
        'NewValue' => null,
    ];
}

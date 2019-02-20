<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ServiceTerritoryHistory
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ServiceTerritoryHistory[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $ServiceTerritoryId
 * @property string $CreatedById
 * @property \Carbon\Carbon $CreatedDate
 * @property mixed $Field
 * @property mixed $OldValue
 * @property mixed $NewValue
 */
class ServiceTerritoryHistory extends BaseRecordModel
{
    public static $objectApiName = 'ServiceTerritoryHistory';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'ServiceTerritoryId' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'Field' => null,
        'OldValue' => null,
        'NewValue' => null,
    ];
}

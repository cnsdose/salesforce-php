<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ForecastingType
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ForecastingType[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $DeveloperName
 * @property string $Language
 * @property string $MasterLabel
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property bool $IsActive
 * @property bool $IsQuantity
 * @property bool $IsAmount
 * @property bool $CanDisplayQuotas
 * @property bool $HasProductFamily
 * @property string $RoleType
 * @property string $DateType
 */
class ForecastingType extends BaseRecordModel
{
    public static $objectApiName = 'ForecastingType';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'DeveloperName' => null,
        'Language' => null,
        'MasterLabel' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'IsActive' => 'bool',
        'IsQuantity' => 'bool',
        'IsAmount' => 'bool',
        'CanDisplayQuotas' => 'bool',
        'HasProductFamily' => 'bool',
        'RoleType' => null,
        'DateType' => null,
    ];
}

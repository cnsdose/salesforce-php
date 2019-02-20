<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class UserAppInfo
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method UserAppInfo[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property mixed $CurrencyIsoCode
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $UserId
 * @property mixed $FormFactor
 * @property string $AppDefinitionId
 */
class UserAppInfo extends BaseRecordModel
{
    public static $objectApiName = 'UserAppInfo';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'CurrencyIsoCode' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'UserId' => null,
        'FormFactor' => null,
        'AppDefinitionId' => null,
    ];
}

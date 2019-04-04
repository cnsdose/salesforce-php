<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ProfileSkillUser
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ProfileSkillUser[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $Name
 * @property string $CurrencyIsoCode
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $ProfileSkillId
 * @property string $UserId
 * @property mixed $EndorsementCount
 */
class ProfileSkillUser extends BaseRecordModel
{
    public static $objectApiName = 'ProfileSkillUser';
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
        'ProfileSkillId' => null,
        'UserId' => null,
        'EndorsementCount' => null,
    ];
}

<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class UserEmailPreferredPerson
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method UserEmailPreferredPerson[] query()
 *
 * @property string Id
 * @property string OwnerId
 * @property bool IsDeleted
 * @property string Name
 * @property mixed CurrencyIsoCode
 * @property \Carbon\Carbon CreatedDate
 * @property string CreatedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property string LastModifiedById
 * @property \Carbon\Carbon SystemModstamp
 * @property mixed Email
 * @property string PersonRecordId
 */
class UserEmailPreferredPerson extends BaseRecordModel
{
    protected static $objectApiName = 'UserEmailPreferredPerson';
    protected $defaultFields = [
        'Id' => null,
        'OwnerId' => null,
        'IsDeleted' => 'bool',
        'Name' => null,
        'CurrencyIsoCode' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'Email' => null,
        'PersonRecordId' => null,
    ];
}

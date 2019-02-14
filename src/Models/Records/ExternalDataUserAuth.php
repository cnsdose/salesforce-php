<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ExternalDataUserAuth
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ExternalDataUserAuth[] query()
 *
 * @property string Id
 * @property bool IsDeleted
 * @property \Carbon\Carbon CreatedDate
 * @property string CreatedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property string LastModifiedById
 * @property \Carbon\Carbon SystemModstamp
 * @property string ExternalDataSourceId
 * @property string UserId
 * @property mixed Protocol
 * @property string Username
 * @property string Password
 * @property string AuthProviderId
 */
class ExternalDataUserAuth extends BaseRecordModel
{
    protected static $objectApiName = 'ExternalDataUserAuth';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'ExternalDataSourceId' => null,
        'UserId' => null,
        'Protocol' => null,
        'Username' => null,
        'Password' => null,
        'AuthProviderId' => null,
    ];
}

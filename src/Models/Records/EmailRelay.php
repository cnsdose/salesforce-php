<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class EmailRelay
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method EmailRelay[] query()
 *
 * @property string Id
 * @property bool IsDeleted
 * @property \Carbon\Carbon CreatedDate
 * @property string CreatedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property string LastModifiedById
 * @property \Carbon\Carbon SystemModstamp
 * @property string Host
 * @property mixed Port
 * @property mixed TlsSetting
 * @property bool IsRequireAuth
 * @property string Username
 * @property mixed Password
 */
class EmailRelay extends BaseRecordModel
{
    protected static $objectApiName = 'EmailRelay';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'Host' => null,
        'Port' => null,
        'TlsSetting' => null,
        'IsRequireAuth' => 'bool',
        'Username' => null,
        'Password' => null,
    ];
}

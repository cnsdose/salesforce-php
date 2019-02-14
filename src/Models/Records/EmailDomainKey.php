<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class EmailDomainKey
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method EmailDomainKey[] query()
 *
 * @property string Id
 * @property bool IsDeleted
 * @property \Carbon\Carbon CreatedDate
 * @property string CreatedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property string LastModifiedById
 * @property \Carbon\Carbon SystemModstamp
 * @property string Selector
 * @property string Domain
 * @property mixed DomainMatch
 * @property bool IsActive
 * @property mixed TxtRecordsPublishState
 * @property string PublicKey
 * @property string PrivateKey
 */
class EmailDomainKey extends BaseRecordModel
{
    protected static $objectApiName = 'EmailDomainKey';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'Selector' => null,
        'Domain' => null,
        'DomainMatch' => null,
        'IsActive' => 'bool',
        'TxtRecordsPublishState' => null,
        'PublicKey' => null,
        'PrivateKey' => null,
    ];
}

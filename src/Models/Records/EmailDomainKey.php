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
 * @property string $Id
 * @property bool $IsDeleted
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $Selector
 * @property string $Domain
 * @property string $DomainMatch
 * @property bool $IsActive
 * @property string $AlternateSelector
 * @property string $TxtRecordName
 * @property string $AlternateTxtRecordName
 * @property string $TxtRecordsPublishState
 * @property mixed $KeySize
 * @property string $PublicKey
 * @property string $AlternatePublicKey
 */
class EmailDomainKey extends BaseRecordModel
{
    public static $objectApiName = 'EmailDomainKey';
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
        'AlternateSelector' => null,
        'TxtRecordName' => null,
        'AlternateTxtRecordName' => null,
        'TxtRecordsPublishState' => null,
        'KeySize' => null,
        'PublicKey' => null,
        'AlternatePublicKey' => null,
    ];
}

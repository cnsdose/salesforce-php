<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class EmailDomainFilter
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method EmailDomainFilter[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property mixed $PriorityNumber
 * @property string $EmailRelayId
 * @property string $ToDomain
 * @property string $FromDomain
 * @property bool $IsActive
 */
class EmailDomainFilter extends BaseRecordModel
{
    public static $objectApiName = 'EmailDomainFilter';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'PriorityNumber' => null,
        'EmailRelayId' => null,
        'ToDomain' => null,
        'FromDomain' => null,
        'IsActive' => 'bool',
    ];
}

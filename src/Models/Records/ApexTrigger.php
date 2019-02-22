<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ApexTrigger
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ApexTrigger[] query()
 *
 * @property string $Id
 * @property string $NamespacePrefix
 * @property string $Name
 * @property string $TableEnumOrId
 * @property bool $UsageBeforeInsert
 * @property bool $UsageAfterInsert
 * @property bool $UsageBeforeUpdate
 * @property bool $UsageAfterUpdate
 * @property bool $UsageBeforeDelete
 * @property bool $UsageAfterDelete
 * @property bool $UsageIsBulk
 * @property bool $UsageAfterUndelete
 * @property float $ApiVersion
 * @property string $Status
 * @property bool $IsValid
 * @property float $BodyCrc
 * @property string $Body
 * @property mixed $LengthWithoutComments
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 */
class ApexTrigger extends BaseRecordModel
{
    public static $objectApiName = 'ApexTrigger';
    protected $defaultFields = [
        'Id' => null,
        'NamespacePrefix' => null,
        'Name' => null,
        'TableEnumOrId' => null,
        'UsageBeforeInsert' => 'bool',
        'UsageAfterInsert' => 'bool',
        'UsageBeforeUpdate' => 'bool',
        'UsageAfterUpdate' => 'bool',
        'UsageBeforeDelete' => 'bool',
        'UsageAfterDelete' => 'bool',
        'UsageIsBulk' => 'bool',
        'UsageAfterUndelete' => 'bool',
        'ApiVersion' => 'number:17,1',
        'Status' => null,
        'IsValid' => 'bool',
        'BodyCrc' => 'number:18,0',
        'Body' => null,
        'LengthWithoutComments' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
    ];
}

<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class AuraDefinition
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method AuraDefinition[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $AuraDefinitionBundleId
 * @property string $DefType
 * @property string $Format
 * @property string $Source
 */
class AuraDefinition extends BaseRecordModel
{
    public static $objectApiName = 'AuraDefinition';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'AuraDefinitionBundleId' => null,
        'DefType' => null,
        'Format' => null,
        'Source' => null,
    ];
}

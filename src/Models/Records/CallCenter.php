<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class CallCenter
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method CallCenter[] query()
 *
 * @property string $Id
 * @property string $Name
 * @property string $InternalName
 * @property float $Version
 * @property string $AdapterUrl
 * @property string $CustomSettings
 * @property \Carbon\Carbon $SystemModstamp
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 */
class CallCenter extends BaseRecordModel
{
    protected static $objectApiName = 'CallCenter';
    protected $defaultFields = [
        'Id' => null,
        'Name' => null,
        'InternalName' => null,
        'Version' => 'number:15,3',
        'AdapterUrl' => null,
        'CustomSettings' => null,
        'SystemModstamp' => 'datetime',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
    ];
}

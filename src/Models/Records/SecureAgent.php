<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class SecureAgent
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method SecureAgent[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $DeveloperName
 * @property mixed $Language
 * @property string $MasterLabel
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $AgentKey
 * @property string $ProxyUserId
 * @property string $SecureAgentsClusterId
 * @property mixed $Priority
 */
class SecureAgent extends BaseRecordModel
{
    public static $objectApiName = 'SecureAgent';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'DeveloperName' => null,
        'Language' => null,
        'MasterLabel' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'AgentKey' => null,
        'ProxyUserId' => null,
        'SecureAgentsClusterId' => null,
        'Priority' => null,
    ];
}

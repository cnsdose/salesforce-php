<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class TransactionSecurityPolicy
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method TransactionSecurityPolicy[] query()
 *
 * @property string Id
 * @property bool IsDeleted
 * @property string DeveloperName
 * @property mixed Language
 * @property string MasterLabel
 * @property string NamespacePrefix
 * @property \Carbon\Carbon CreatedDate
 * @property string CreatedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property string LastModifiedById
 * @property \Carbon\Carbon SystemModstamp
 * @property mixed Type
 * @property mixed State
 * @property string ActionConfig
 * @property string ApexPolicyId
 * @property mixed EventType
 * @property string ResourceName
 * @property string ExecutionUserId
 * @property string Description
 */
class TransactionSecurityPolicy extends BaseRecordModel
{
    protected static $objectApiName = 'TransactionSecurityPolicy';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'DeveloperName' => null,
        'Language' => null,
        'MasterLabel' => null,
        'NamespacePrefix' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'Type' => null,
        'State' => null,
        'ActionConfig' => null,
        'ApexPolicyId' => null,
        'EventType' => null,
        'ResourceName' => null,
        'ExecutionUserId' => null,
        'Description' => null,
    ];
}
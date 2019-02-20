<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class UserProvisioningConfig
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method UserProvisioningConfig[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $DeveloperName
 * @property mixed $Language
 * @property string $MasterLabel
 * @property string $NamespacePrefix
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $ConnectedAppId
 * @property string $Notes
 * @property bool $Enabled
 * @property string $ApprovalRequired
 * @property string $UserAccountMapping
 * @property string $EnabledOperations
 * @property string $OnUpdateAttributes
 * @property \Carbon\Carbon $LastReconDateTime
 * @property string $NamedCredentialId
 * @property string $ReconFilter
 */
class UserProvisioningConfig extends BaseRecordModel
{
    public static $objectApiName = 'UserProvisioningConfig';
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
        'ConnectedAppId' => null,
        'Notes' => null,
        'Enabled' => 'bool',
        'ApprovalRequired' => null,
        'UserAccountMapping' => null,
        'EnabledOperations' => null,
        'OnUpdateAttributes' => null,
        'LastReconDateTime' => 'datetime',
        'NamedCredentialId' => null,
        'ReconFilter' => null,
    ];
}

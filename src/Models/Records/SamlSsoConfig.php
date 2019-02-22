<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class SamlSsoConfig
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method SamlSsoConfig[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $DeveloperName
 * @property string $Language
 * @property string $MasterLabel
 * @property string $NamespacePrefix
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $Version
 * @property string $Issuer
 * @property bool $OptionsSpInitBinding
 * @property bool $OptionsUserProvisioning
 * @property string $AttributeFormat
 * @property string $AttributeName
 * @property string $Audience
 * @property string $IdentityMapping
 * @property string $IdentityLocation
 * @property string $SamlJitHandlerId
 * @property string $ExecutionUserId
 * @property string $LoginUrl
 * @property string $LogoutUrl
 * @property string $ErrorUrl
 * @property string $ValidationCert
 * @property string $RequestSignatureMethod
 * @property string $SingleLogoutUrl
 * @property string $SingleLogoutBinding
 */
class SamlSsoConfig extends BaseRecordModel
{
    public static $objectApiName = 'SamlSsoConfig';
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
        'Version' => null,
        'Issuer' => null,
        'OptionsSpInitBinding' => 'bool',
        'OptionsUserProvisioning' => 'bool',
        'AttributeFormat' => null,
        'AttributeName' => null,
        'Audience' => null,
        'IdentityMapping' => null,
        'IdentityLocation' => null,
        'SamlJitHandlerId' => null,
        'ExecutionUserId' => null,
        'LoginUrl' => null,
        'LogoutUrl' => null,
        'ErrorUrl' => null,
        'ValidationCert' => null,
        'RequestSignatureMethod' => null,
        'SingleLogoutUrl' => null,
        'SingleLogoutBinding' => null,
    ];
}

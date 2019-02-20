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
 * @property mixed $Language
 * @property string $MasterLabel
 * @property string $NamespacePrefix
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property mixed $Version
 * @property string $Issuer
 * @property bool $OptionsSpInitBinding
 * @property bool $OptionsUserProvisioning
 * @property string $AttributeFormat
 * @property string $AttributeName
 * @property string $Audience
 * @property mixed $IdentityMapping
 * @property mixed $IdentityLocation
 * @property string $SamlJitHandlerId
 * @property string $ExecutionUserId
 * @property string $LoginUrl
 * @property string $LogoutUrl
 * @property string $ErrorUrl
 * @property string $ValidationCert
 * @property mixed $RequestSignatureMethod
 * @property string $SingleLogoutUrl
 * @property mixed $SingleLogoutBinding
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

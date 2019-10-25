<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class AuthProvider
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method AuthProvider[] query()
 *
 * @property string $Id
 * @property \Carbon\Carbon $CreatedDate
 * @property string $ProviderType
 * @property string $FriendlyName
 * @property string $DeveloperName
 * @property string $RegistrationHandlerId
 * @property string $ExecutionUserId
 * @property string $ConsumerKey
 * @property string $ConsumerSecret
 * @property string $ErrorUrl
 * @property mixed $AuthorizeUrl
 * @property mixed $TokenUrl
 * @property mixed $UserInfoUrl
 * @property string $DefaultScopes
 * @property string $IdTokenIssuer
 * @property bool $OptionsSendAccessTokenInHeader
 * @property bool $OptionsSendClientCredentialsInHeader
 * @property bool $OptionsIncludeOrgIdInId
 * @property bool $OptionsSendSecretInApis
 * @property mixed $IconUrl
 * @property mixed $LogoutUrl
 * @property string $PluginId
 * @property string $CustomMetadataTypeRecord
 * @property string $EcKey
 * @property string $AppleTeam
 * @property mixed $SsoKickoffUrl
 * @property mixed $LinkKickoffUrl
 * @property mixed $OauthKickoffUrl
 */
class AuthProvider extends BaseRecordModel
{
    public static $objectApiName = 'AuthProvider';
    protected $defaultFields = [
        'Id' => null,
        'CreatedDate' => 'datetime',
        'ProviderType' => null,
        'FriendlyName' => null,
        'DeveloperName' => null,
        'RegistrationHandlerId' => null,
        'ExecutionUserId' => null,
        'ConsumerKey' => null,
        'ConsumerSecret' => null,
        'ErrorUrl' => null,
        'AuthorizeUrl' => null,
        'TokenUrl' => null,
        'UserInfoUrl' => null,
        'DefaultScopes' => null,
        'IdTokenIssuer' => null,
        'OptionsSendAccessTokenInHeader' => 'bool',
        'OptionsSendClientCredentialsInHeader' => 'bool',
        'OptionsIncludeOrgIdInId' => 'bool',
        'OptionsSendSecretInApis' => 'bool',
        'IconUrl' => null,
        'LogoutUrl' => null,
        'PluginId' => null,
        'CustomMetadataTypeRecord' => null,
        'EcKey' => null,
        'AppleTeam' => null,
        'SsoKickoffUrl' => null,
        'LinkKickoffUrl' => null,
        'OauthKickoffUrl' => null,
    ];
}

<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ExternalSocialAccount
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ExternalSocialAccount[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $DeveloperName
 * @property string $Language
 * @property string $MasterLabel
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $ExternalAccountId
 * @property string $Username
 * @property string $Provider
 * @property string $ProviderUserId
 * @property mixed $ExternalPictureURL
 * @property bool $IsActive
 * @property string $SocialPropertyId
 * @property bool $IsAuthenticated
 * @property string $TopicId
 * @property string $DataSourceId
 * @property string $RuleId
 * @property bool $IsDataSourceActive
 * @property string $UniqueName
 * @property string $DefaultResponseAccountId
 * @property mixed $ProfileUrl
 * @property string $AuthorizedBy
 * @property bool $IsCaseCreationEnabled
 */
class ExternalSocialAccount extends BaseRecordModel
{
    public static $objectApiName = 'ExternalSocialAccount';
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
        'ExternalAccountId' => null,
        'Username' => null,
        'Provider' => null,
        'ProviderUserId' => null,
        'ExternalPictureURL' => null,
        'IsActive' => 'bool',
        'SocialPropertyId' => null,
        'IsAuthenticated' => 'bool',
        'TopicId' => null,
        'DataSourceId' => null,
        'RuleId' => null,
        'IsDataSourceActive' => 'bool',
        'UniqueName' => null,
        'DefaultResponseAccountId' => null,
        'ProfileUrl' => null,
        'AuthorizedBy' => null,
        'IsCaseCreationEnabled' => 'bool',
    ];
}

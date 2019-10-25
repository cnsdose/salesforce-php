<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ScratchOrgInfo
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ScratchOrgInfo[] query()
 *
 * @property string $Id
 * @property string $OwnerId
 * @property bool $IsDeleted
 * @property string $Name
 * @property string $CurrencyIsoCode
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property \Carbon\Carbon $LastViewedDate
 * @property \Carbon\Carbon $LastReferencedDate
 * @property string $Edition
 * @property string $Username
 * @property mixed $AdminEmail
 * @property string $OrgName
 * @property mixed $DurationDays
 * @property string $ConnectedAppConsumerKey
 * @property string $ConnectedAppCallbackUrl
 * @property string $Namespace
 * @property string $Features
 * @property string $Country
 * @property string $Language
 * @property string $Instance
 * @property string $Package2AncestorIds
 * @property bool $HasSampleData
 * @property string $Release
 * @property string $SignupUsername
 * @property string $Status
 * @property string $ErrorCode
 * @property string $ScratchOrg
 * @property string $SignupInstance
 * @property string $AuthCode
 * @property string $SignupCountry
 * @property string $SignupLanguage
 * @property mixed $SignupEmail
 * @property mixed $SignupTrialDays
 * @property string $LoginUrl
 * @property string $Description
 * @property \Carbon\Carbon $ExpirationDate
 * @property \Carbon\Carbon $LastLoginDate
 * @property string $DeletedBy
 * @property \Carbon\Carbon $DeletedDate
 */
class ScratchOrgInfo extends BaseRecordModel
{
    public static $objectApiName = 'ScratchOrgInfo';
    protected $defaultFields = [
        'Id' => null,
        'OwnerId' => null,
        'IsDeleted' => 'bool',
        'Name' => null,
        'CurrencyIsoCode' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'LastViewedDate' => 'datetime',
        'LastReferencedDate' => 'datetime',
        'Edition' => null,
        'Username' => null,
        'AdminEmail' => null,
        'OrgName' => null,
        'DurationDays' => null,
        'ConnectedAppConsumerKey' => null,
        'ConnectedAppCallbackUrl' => null,
        'Namespace' => null,
        'Features' => null,
        'Country' => null,
        'Language' => null,
        'Instance' => null,
        'Package2AncestorIds' => null,
        'HasSampleData' => 'bool',
        'Release' => null,
        'SignupUsername' => null,
        'Status' => null,
        'ErrorCode' => null,
        'ScratchOrg' => null,
        'SignupInstance' => null,
        'AuthCode' => null,
        'SignupCountry' => null,
        'SignupLanguage' => null,
        'SignupEmail' => null,
        'SignupTrialDays' => null,
        'LoginUrl' => null,
        'Description' => null,
        'ExpirationDate' => 'date',
        'LastLoginDate' => 'date',
        'DeletedBy' => null,
        'DeletedDate' => 'date',
    ];
}

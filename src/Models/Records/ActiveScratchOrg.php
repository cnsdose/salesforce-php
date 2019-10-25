<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ActiveScratchOrg
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ActiveScratchOrg[] query()
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
 * @property string $ScratchOrg
 * @property string $ScratchOrgInfoId
 * @property string $Description
 * @property string $Features
 * @property string $Edition
 * @property mixed $SignupTrialDays
 * @property \Carbon\Carbon $ExpirationDate
 * @property string $SignupInstance
 * @property string $Namespace
 * @property string $SignupUsername
 * @property mixed $SignupEmail
 * @property string $OrgName
 * @property \Carbon\Carbon $LastLoginDate
 * @property bool $HasSampleData
 */
class ActiveScratchOrg extends BaseRecordModel
{
    public static $objectApiName = 'ActiveScratchOrg';
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
        'ScratchOrg' => null,
        'ScratchOrgInfoId' => null,
        'Description' => null,
        'Features' => null,
        'Edition' => null,
        'SignupTrialDays' => null,
        'ExpirationDate' => 'date',
        'SignupInstance' => null,
        'Namespace' => null,
        'SignupUsername' => null,
        'SignupEmail' => null,
        'OrgName' => null,
        'LastLoginDate' => 'date',
        'HasSampleData' => 'bool',
    ];
}

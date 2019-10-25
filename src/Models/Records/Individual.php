<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class Individual
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method Individual[] query()
 *
 * @property string $Id
 * @property string $OwnerId
 * @property bool $IsDeleted
 * @property string $LastName
 * @property string $FirstName
 * @property string $Salutation
 * @property string $MiddleName
 * @property string $Suffix
 * @property string $Name
 * @property bool $HasOptedOutTracking
 * @property bool $HasOptedOutProfiling
 * @property bool $HasOptedOutProcessing
 * @property bool $HasOptedOutSolicit
 * @property bool $ShouldForget
 * @property bool $SendIndividualData
 * @property bool $CanStorePiiElsewhere
 * @property bool $HasOptedOutGeoTracking
 * @property \Carbon\Carbon $BirthDate
 * @property \Carbon\Carbon $DeathDate
 * @property mixed $ConvictionsCount
 * @property mixed $ChildrenCount
 * @property string $MilitaryService
 * @property bool $IsHomeOwner
 * @property string $Occupation
 * @property mixed $Website
 * @property string $IndividualsAge
 * @property \Carbon\Carbon $LastViewedDate
 * @property string $MasterRecordId
 * @property mixed $ConsumerCreditScore
 * @property string $ConsumerCreditScoreProviderName
 * @property mixed $InfluencerRating
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 */
class Individual extends BaseRecordModel
{
    public static $objectApiName = 'Individual';
    protected $defaultFields = [
        'Id' => null,
        'OwnerId' => null,
        'IsDeleted' => 'bool',
        'LastName' => null,
        'FirstName' => null,
        'Salutation' => null,
        'MiddleName' => null,
        'Suffix' => null,
        'Name' => null,
        'HasOptedOutTracking' => 'bool',
        'HasOptedOutProfiling' => 'bool',
        'HasOptedOutProcessing' => 'bool',
        'HasOptedOutSolicit' => 'bool',
        'ShouldForget' => 'bool',
        'SendIndividualData' => 'bool',
        'CanStorePiiElsewhere' => 'bool',
        'HasOptedOutGeoTracking' => 'bool',
        'BirthDate' => 'date',
        'DeathDate' => 'date',
        'ConvictionsCount' => null,
        'ChildrenCount' => null,
        'MilitaryService' => null,
        'IsHomeOwner' => 'bool',
        'Occupation' => null,
        'Website' => null,
        'IndividualsAge' => null,
        'LastViewedDate' => 'datetime',
        'MasterRecordId' => null,
        'ConsumerCreditScore' => null,
        'ConsumerCreditScoreProviderName' => null,
        'InfluencerRating' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
    ];
}

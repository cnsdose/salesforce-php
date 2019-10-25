<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ContactPointTypeConsent
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ContactPointTypeConsent[] query()
 *
 * @property string $Id
 * @property string $OwnerId
 * @property bool $IsDeleted
 * @property string $Name
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property \Carbon\Carbon $LastViewedDate
 * @property \Carbon\Carbon $LastReferencedDate
 * @property string $PartyId
 * @property string $ContactPointType
 * @property string $DataUsePurposeId
 * @property string $PrivacyConsentStatus
 * @property \Carbon\Carbon $EffectiveFrom
 * @property \Carbon\Carbon $EffectiveTo
 * @property \Carbon\Carbon $CaptureDate
 * @property string $CaptureContactPointType
 * @property string $CaptureSource
 * @property \Carbon\Carbon $DoubleConsentCaptureDate
 */
class ContactPointTypeConsent extends BaseRecordModel
{
    public static $objectApiName = 'ContactPointTypeConsent';
    protected $defaultFields = [
        'Id' => null,
        'OwnerId' => null,
        'IsDeleted' => 'bool',
        'Name' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'LastViewedDate' => 'datetime',
        'LastReferencedDate' => 'datetime',
        'PartyId' => null,
        'ContactPointType' => null,
        'DataUsePurposeId' => null,
        'PrivacyConsentStatus' => null,
        'EffectiveFrom' => 'datetime',
        'EffectiveTo' => 'datetime',
        'CaptureDate' => 'datetime',
        'CaptureContactPointType' => null,
        'CaptureSource' => null,
        'DoubleConsentCaptureDate' => 'datetime',
    ];
}

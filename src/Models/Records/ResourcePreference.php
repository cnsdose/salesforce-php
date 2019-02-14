<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ResourcePreference
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ResourcePreference[] query()
 *
 * @property string Id
 * @property bool IsDeleted
 * @property string ResourcePreferenceNumber
 * @property mixed CurrencyIsoCode
 * @property \Carbon\Carbon CreatedDate
 * @property string CreatedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property string LastModifiedById
 * @property \Carbon\Carbon SystemModstamp
 * @property \Carbon\Carbon LastViewedDate
 * @property \Carbon\Carbon LastReferencedDate
 * @property string ServiceResourceId
 * @property string RelatedRecordId
 * @property mixed PreferenceType
 */
class ResourcePreference extends BaseRecordModel
{
    protected static $objectApiName = 'ResourcePreference';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'ResourcePreferenceNumber' => null,
        'CurrencyIsoCode' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'LastViewedDate' => 'datetime',
        'LastReferencedDate' => 'datetime',
        'ServiceResourceId' => null,
        'RelatedRecordId' => null,
        'PreferenceType' => null,
    ];
}

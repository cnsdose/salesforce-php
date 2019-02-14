<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class AssetRelationship
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method AssetRelationship[] query()
 *
 * @property string Id
 * @property bool IsDeleted
 * @property string AssetRelationshipNumber
 * @property mixed CurrencyIsoCode
 * @property \Carbon\Carbon CreatedDate
 * @property string CreatedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property string LastModifiedById
 * @property \Carbon\Carbon SystemModstamp
 * @property \Carbon\Carbon LastViewedDate
 * @property \Carbon\Carbon LastReferencedDate
 * @property string AssetId
 * @property string RelatedAssetId
 * @property \Carbon\Carbon FromDate
 * @property \Carbon\Carbon ToDate
 * @property mixed RelationshipType
 */
class AssetRelationship extends BaseRecordModel
{
    protected static $objectApiName = 'AssetRelationship';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'AssetRelationshipNumber' => null,
        'CurrencyIsoCode' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'LastViewedDate' => 'datetime',
        'LastReferencedDate' => 'datetime',
        'AssetId' => null,
        'RelatedAssetId' => null,
        'FromDate' => 'datetime',
        'ToDate' => 'datetime',
        'RelationshipType' => null,
    ];
}

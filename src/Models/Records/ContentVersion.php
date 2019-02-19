<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ContentVersion
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ContentVersion[] query()
 *
 * @property string $Id
 * @property string $ContentDocumentId
 * @property bool $IsLatest
 * @property mixed $ContentUrl
 * @property string $ContentBodyId
 * @property string $VersionNumber
 * @property string $Title
 * @property string $Description
 * @property string $ReasonForChange
 * @property mixed $SharingOption
 * @property mixed $SharingPrivacy
 * @property string $PathOnClient
 * @property mixed $RatingCount
 * @property bool $IsDeleted
 * @property \Carbon\Carbon $ContentModifiedDate
 * @property string $ContentModifiedById
 * @property mixed $PositiveRatingCount
 * @property mixed $NegativeRatingCount
 * @property mixed $FeaturedContentBoost
 * @property \Carbon\Carbon $FeaturedContentDate
 * @property mixed $CurrencyIsoCode
 * @property string $OwnerId
 * @property string $CreatedById
 * @property \Carbon\Carbon $CreatedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $TagCsv
 * @property string $FileType
 * @property mixed $PublishStatus
 * @property mixed $VersionData
 * @property mixed $ContentSize
 * @property string $FileExtension
 * @property string $FirstPublishLocationId
 * @property mixed $Origin
 * @property mixed $ContentLocation
 * @property string $TextPreview
 * @property string $ExternalDocumentInfo1
 * @property string $ExternalDocumentInfo2
 * @property string $ExternalDataSourceId
 * @property string $Checksum
 * @property bool $IsMajorVersion
 * @property bool $IsAssetEnabled
 */
class ContentVersion extends BaseRecordModel
{
    protected static $objectApiName = 'ContentVersion';
    protected $defaultFields = [
        'Id' => null,
        'ContentDocumentId' => null,
        'IsLatest' => 'bool',
        'ContentUrl' => null,
        'ContentBodyId' => null,
        'VersionNumber' => null,
        'Title' => null,
        'Description' => null,
        'ReasonForChange' => null,
        'SharingOption' => null,
        'SharingPrivacy' => null,
        'PathOnClient' => null,
        'RatingCount' => null,
        'IsDeleted' => 'bool',
        'ContentModifiedDate' => 'datetime',
        'ContentModifiedById' => null,
        'PositiveRatingCount' => null,
        'NegativeRatingCount' => null,
        'FeaturedContentBoost' => null,
        'FeaturedContentDate' => 'date',
        'CurrencyIsoCode' => null,
        'OwnerId' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'LastModifiedById' => null,
        'LastModifiedDate' => 'datetime',
        'SystemModstamp' => 'datetime',
        'TagCsv' => null,
        'FileType' => null,
        'PublishStatus' => null,
        'VersionData' => null,
        'ContentSize' => null,
        'FileExtension' => null,
        'FirstPublishLocationId' => null,
        'Origin' => null,
        'ContentLocation' => null,
        'TextPreview' => null,
        'ExternalDocumentInfo1' => null,
        'ExternalDocumentInfo2' => null,
        'ExternalDataSourceId' => null,
        'Checksum' => null,
        'IsMajorVersion' => 'bool',
        'IsAssetEnabled' => 'bool',
    ];
}

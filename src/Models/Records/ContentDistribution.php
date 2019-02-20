<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ContentDistribution
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ContentDistribution[] query()
 *
 * @property string $Id
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property string $OwnerId
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $Name
 * @property bool $IsDeleted
 * @property string $ContentVersionId
 * @property string $ContentDocumentId
 * @property string $RelatedRecordId
 * @property bool $PreferencesAllowPDFDownload
 * @property bool $PreferencesAllowOriginalDownload
 * @property bool $PreferencesPasswordRequired
 * @property bool $PreferencesNotifyOnVisit
 * @property bool $PreferencesLinkLatestVersion
 * @property bool $PreferencesAllowViewInBrowser
 * @property bool $PreferencesExpires
 * @property bool $PreferencesNotifyRndtnComplete
 * @property \Carbon\Carbon $ExpiryDate
 * @property string $Password
 * @property mixed $ViewCount
 * @property \Carbon\Carbon $FirstViewDate
 * @property \Carbon\Carbon $LastViewDate
 * @property string $DistributionPublicUrl
 * @property string $ContentDownloadUrl
 * @property string $PdfDownloadUrl
 */
class ContentDistribution extends BaseRecordModel
{
    public static $objectApiName = 'ContentDistribution';
    protected $defaultFields = [
        'Id' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'OwnerId' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'Name' => null,
        'IsDeleted' => 'bool',
        'ContentVersionId' => null,
        'ContentDocumentId' => null,
        'RelatedRecordId' => null,
        'PreferencesAllowPDFDownload' => 'bool',
        'PreferencesAllowOriginalDownload' => 'bool',
        'PreferencesPasswordRequired' => 'bool',
        'PreferencesNotifyOnVisit' => 'bool',
        'PreferencesLinkLatestVersion' => 'bool',
        'PreferencesAllowViewInBrowser' => 'bool',
        'PreferencesExpires' => 'bool',
        'PreferencesNotifyRndtnComplete' => 'bool',
        'ExpiryDate' => 'datetime',
        'Password' => null,
        'ViewCount' => null,
        'FirstViewDate' => 'datetime',
        'LastViewDate' => 'datetime',
        'DistributionPublicUrl' => null,
        'ContentDownloadUrl' => null,
        'PdfDownloadUrl' => null,
    ];
}

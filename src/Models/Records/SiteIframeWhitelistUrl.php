<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class SiteIframeWhitelistUrl
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method SiteIframeWhitelistUrl[] query()
 *
 * @property string Id
 * @property bool IsDeleted
 * @property \Carbon\Carbon CreatedDate
 * @property string CreatedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property string LastModifiedById
 * @property \Carbon\Carbon SystemModstamp
 * @property string SiteId
 * @property string Url
 */
class SiteIframeWhitelistUrl extends BaseRecordModel
{
    protected static $objectApiName = 'SiteIframeWhitelistUrl';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'SiteId' => null,
        'Url' => null,
    ];
}

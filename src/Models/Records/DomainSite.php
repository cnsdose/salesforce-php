<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class DomainSite
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method DomainSite[] query()
 *
 * @property string $Id
 * @property string $DomainId
 * @property string $SiteId
 * @property string $PathPrefix
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 */
class DomainSite extends BaseRecordModel
{
    public static $objectApiName = 'DomainSite';
    protected $defaultFields = [
        'Id' => null,
        'DomainId' => null,
        'SiteId' => null,
        'PathPrefix' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
    ];
}

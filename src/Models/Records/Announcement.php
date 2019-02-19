<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class Announcement
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method Announcement[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $FeedItemId
 * @property \Carbon\Carbon $ExpirationDate
 * @property bool $SendEmails
 * @property bool $IsArchived
 * @property string $ParentId
 */
class Announcement extends BaseRecordModel
{
    protected static $objectApiName = 'Announcement';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'FeedItemId' => null,
        'ExpirationDate' => 'datetime',
        'SendEmails' => 'bool',
        'IsArchived' => 'bool',
        'ParentId' => null,
    ];
}

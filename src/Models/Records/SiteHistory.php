<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class SiteHistory
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method SiteHistory[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $SiteId
 * @property string $CreatedById
 * @property \Carbon\Carbon $CreatedDate
 * @property string $Field
 * @property mixed $OldValue
 * @property mixed $NewValue
 */
class SiteHistory extends BaseRecordModel
{
    public static $objectApiName = 'SiteHistory';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'SiteId' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'Field' => null,
        'OldValue' => null,
        'NewValue' => null,
    ];
}

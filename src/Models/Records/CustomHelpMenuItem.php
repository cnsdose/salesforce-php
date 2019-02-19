<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class CustomHelpMenuItem
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method CustomHelpMenuItem[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $ParentId
 * @property string $MasterLabel
 * @property mixed $LinkUrl
 * @property mixed $SortOrder
 */
class CustomHelpMenuItem extends BaseRecordModel
{
    protected static $objectApiName = 'CustomHelpMenuItem';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'ParentId' => null,
        'MasterLabel' => null,
        'LinkUrl' => null,
        'SortOrder' => null,
    ];
}

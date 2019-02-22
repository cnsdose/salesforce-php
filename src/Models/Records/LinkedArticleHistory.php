<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class LinkedArticleHistory
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method LinkedArticleHistory[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $LinkedArticleId
 * @property string $CreatedById
 * @property \Carbon\Carbon $CreatedDate
 * @property string $Field
 * @property mixed $OldValue
 * @property mixed $NewValue
 */
class LinkedArticleHistory extends BaseRecordModel
{
    public static $objectApiName = 'LinkedArticleHistory';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'LinkedArticleId' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'Field' => null,
        'OldValue' => null,
        'NewValue' => null,
    ];
}

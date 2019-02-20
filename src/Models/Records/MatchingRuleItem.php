<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class MatchingRuleItem
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method MatchingRuleItem[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $MatchingRuleId
 * @property mixed $SortOrder
 * @property mixed $Field
 * @property mixed $MatchingMethod
 * @property mixed $BlankValueBehavior
 */
class MatchingRuleItem extends BaseRecordModel
{
    public static $objectApiName = 'MatchingRuleItem';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'MatchingRuleId' => null,
        'SortOrder' => null,
        'Field' => null,
        'MatchingMethod' => null,
        'BlankValueBehavior' => null,
    ];
}

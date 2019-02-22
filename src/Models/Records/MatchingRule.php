<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class MatchingRule
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method MatchingRule[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $SobjectType
 * @property string $DeveloperName
 * @property string $Language
 * @property string $MasterLabel
 * @property string $NamespacePrefix
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $MatchEngine
 * @property string $BooleanFilter
 * @property string $Description
 * @property string $RuleStatus
 * @property string $SobjectSubtype
 */
class MatchingRule extends BaseRecordModel
{
    public static $objectApiName = 'MatchingRule';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'SobjectType' => null,
        'DeveloperName' => null,
        'Language' => null,
        'MasterLabel' => null,
        'NamespacePrefix' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'MatchEngine' => null,
        'BooleanFilter' => null,
        'Description' => null,
        'RuleStatus' => null,
        'SobjectSubtype' => null,
    ];
}

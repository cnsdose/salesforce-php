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
 * @property mixed $SobjectType
 * @property string $DeveloperName
 * @property mixed $Language
 * @property string $MasterLabel
 * @property string $NamespacePrefix
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property mixed $MatchEngine
 * @property string $BooleanFilter
 * @property string $Description
 * @property mixed $RuleStatus
 * @property mixed $SobjectSubtype
 */
class MatchingRule extends BaseRecordModel
{
    protected static $objectApiName = 'MatchingRule';
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

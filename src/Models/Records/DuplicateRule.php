<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class DuplicateRule
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method DuplicateRule[] query()
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
 * @property bool $IsActive
 * @property string $SobjectSubtype
 * @property \Carbon\Carbon $LastViewedDate
 */
class DuplicateRule extends BaseRecordModel
{
    public static $objectApiName = 'DuplicateRule';
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
        'IsActive' => 'bool',
        'SobjectSubtype' => null,
        'LastViewedDate' => 'datetime',
    ];
}

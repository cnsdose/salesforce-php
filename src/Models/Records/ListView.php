<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ListView
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ListView[] query()
 *
 * @property string $Id
 * @property string $Name
 * @property string $DeveloperName
 * @property string $NamespacePrefix
 * @property mixed $SobjectType
 * @property bool $IsSoqlCompatible
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property \Carbon\Carbon $LastViewedDate
 * @property \Carbon\Carbon $LastReferencedDate
 */
class ListView extends BaseRecordModel
{
    protected static $objectApiName = 'ListView';
    protected $defaultFields = [
        'Id' => null,
        'Name' => null,
        'DeveloperName' => null,
        'NamespacePrefix' => null,
        'SobjectType' => null,
        'IsSoqlCompatible' => 'bool',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'LastViewedDate' => 'datetime',
        'LastReferencedDate' => 'datetime',
    ];
}

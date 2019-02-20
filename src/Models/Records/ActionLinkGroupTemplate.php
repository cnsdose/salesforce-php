<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ActionLinkGroupTemplate
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ActionLinkGroupTemplate[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $DeveloperName
 * @property mixed $Language
 * @property string $MasterLabel
 * @property string $NamespacePrefix
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property mixed $ExecutionsAllowed
 * @property mixed $HoursUntilExpiration
 * @property mixed $Category
 * @property bool $IsPublished
 */
class ActionLinkGroupTemplate extends BaseRecordModel
{
    public static $objectApiName = 'ActionLinkGroupTemplate';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'DeveloperName' => null,
        'Language' => null,
        'MasterLabel' => null,
        'NamespacePrefix' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'ExecutionsAllowed' => null,
        'HoursUntilExpiration' => null,
        'Category' => null,
        'IsPublished' => 'bool',
    ];
}

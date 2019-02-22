<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class Report
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method Report[] query()
 *
 * @property string $Id
 * @property string $OwnerId
 * @property string $FolderName
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property bool $IsDeleted
 * @property string $Name
 * @property string $Description
 * @property string $DeveloperName
 * @property string $NamespacePrefix
 * @property \Carbon\Carbon $LastRunDate
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $Format
 * @property \Carbon\Carbon $LastViewedDate
 * @property \Carbon\Carbon $LastReferencedDate
 */
class Report extends BaseRecordModel
{
    public static $objectApiName = 'Report';
    protected $defaultFields = [
        'Id' => null,
        'OwnerId' => null,
        'FolderName' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'IsDeleted' => 'bool',
        'Name' => null,
        'Description' => null,
        'DeveloperName' => null,
        'NamespacePrefix' => null,
        'LastRunDate' => 'datetime',
        'SystemModstamp' => 'datetime',
        'Format' => null,
        'LastViewedDate' => 'datetime',
        'LastReferencedDate' => 'datetime',
    ];
}

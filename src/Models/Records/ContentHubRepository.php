<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ContentHubRepository
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ContentHubRepository[] query()
 *
 * @property string $Id
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property bool $IsDeleted
 * @property string $DeveloperName
 * @property string $MasterLabel
 * @property string $Type
 */
class ContentHubRepository extends BaseRecordModel
{
    public static $objectApiName = 'ContentHubRepository';
    protected $defaultFields = [
        'Id' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'IsDeleted' => 'bool',
        'DeveloperName' => null,
        'MasterLabel' => null,
        'Type' => null,
    ];
}

<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class StaticResource
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method StaticResource[] query()
 *
 * @property string $Id
 * @property string $NamespacePrefix
 * @property string $Name
 * @property string $ContentType
 * @property mixed $BodyLength
 * @property mixed $Body
 * @property string $Description
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $CacheControl
 */
class StaticResource extends BaseRecordModel
{
    public static $objectApiName = 'StaticResource';
    protected $defaultFields = [
        'Id' => null,
        'NamespacePrefix' => null,
        'Name' => null,
        'ContentType' => null,
        'BodyLength' => null,
        'Body' => null,
        'Description' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'CacheControl' => null,
    ];
}

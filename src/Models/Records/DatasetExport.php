<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class DatasetExport
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method DatasetExport[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property mixed $PublisherType
 * @property mixed $MetadataLength
 * @property mixed $CompressedMetadataLength
 * @property mixed $Status
 * @property string $Owner
 * @property string $PublisherInfo
 * @property mixed $Metadata
 */
class DatasetExport extends BaseRecordModel
{
    public static $objectApiName = 'DatasetExport';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'PublisherType' => null,
        'MetadataLength' => null,
        'CompressedMetadataLength' => null,
        'Status' => null,
        'Owner' => null,
        'PublisherInfo' => null,
        'Metadata' => null,
    ];
}

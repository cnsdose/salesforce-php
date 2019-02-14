<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class DatasetExportPart
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method DatasetExportPart[] query()
 *
 * @property string Id
 * @property bool IsDeleted
 * @property \Carbon\Carbon CreatedDate
 * @property string CreatedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property string LastModifiedById
 * @property \Carbon\Carbon SystemModstamp
 * @property string DatasetExportId
 * @property mixed DataFileLength
 * @property mixed CompressedDataFileLength
 * @property mixed PartNumber
 * @property string Owner
 * @property mixed DataFile
 */
class DatasetExportPart extends BaseRecordModel
{
    protected static $objectApiName = 'DatasetExportPart';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'DatasetExportId' => null,
        'DataFileLength' => null,
        'CompressedDataFileLength' => null,
        'PartNumber' => null,
        'Owner' => null,
        'DataFile' => null,
    ];
}

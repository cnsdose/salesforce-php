<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class AdditionalNumber
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method AdditionalNumber[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $CallCenterId
 * @property string $Name
 * @property string $Description
 * @property mixed $Phone
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 */
class AdditionalNumber extends BaseRecordModel
{
    protected static $objectApiName = 'AdditionalNumber';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'CallCenterId' => null,
        'Name' => null,
        'Description' => null,
        'Phone' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
    ];
}

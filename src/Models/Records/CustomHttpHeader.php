<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class CustomHttpHeader
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method CustomHttpHeader[] query()
 *
 * @property string $Id
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $ParentId
 * @property string $HeaderFieldName
 * @property string $HeaderFieldValue
 * @property bool $IsActive
 * @property string $Description
 */
class CustomHttpHeader extends BaseRecordModel
{
    protected static $objectApiName = 'CustomHttpHeader';
    protected $defaultFields = [
        'Id' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'ParentId' => null,
        'HeaderFieldName' => null,
        'HeaderFieldValue' => null,
        'IsActive' => 'bool',
        'Description' => null,
    ];
}

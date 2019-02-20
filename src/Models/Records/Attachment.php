<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class Attachment
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method Attachment[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $ParentId
 * @property string $Name
 * @property bool $IsPrivate
 * @property string $ContentType
 * @property mixed $BodyLength
 * @property mixed $Body
 * @property string $OwnerId
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $Description
 */
class Attachment extends BaseRecordModel
{
    public static $objectApiName = 'Attachment';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'ParentId' => null,
        'Name' => null,
        'IsPrivate' => 'bool',
        'ContentType' => null,
        'BodyLength' => null,
        'Body' => null,
        'OwnerId' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'Description' => null,
    ];
}

<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class WorkBadge
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method WorkBadge[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $CurrencyIsoCode
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property \Carbon\Carbon $LastViewedDate
 * @property \Carbon\Carbon $LastReferencedDate
 * @property string $SourceId
 * @property string $DefinitionId
 * @property string $RecipientId
 * @property string $GiverId
 * @property mixed $ImageUrl
 * @property string $Description
 * @property string $Message
 */
class WorkBadge extends BaseRecordModel
{
    public static $objectApiName = 'WorkBadge';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'CurrencyIsoCode' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'LastViewedDate' => 'datetime',
        'LastReferencedDate' => 'datetime',
        'SourceId' => null,
        'DefinitionId' => null,
        'RecipientId' => null,
        'GiverId' => null,
        'ImageUrl' => null,
        'Description' => null,
        'Message' => null,
    ];
}

<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ListEmailRecipientSource
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ListEmailRecipientSource[] query()
 *
 * @property string Id
 * @property bool IsDeleted
 * @property string Name
 * @property mixed CurrencyIsoCode
 * @property \Carbon\Carbon CreatedDate
 * @property string CreatedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property string LastModifiedById
 * @property \Carbon\Carbon SystemModstamp
 * @property string ListEmailId
 * @property string SourceListId
 * @property mixed SourceType
 */
class ListEmailRecipientSource extends BaseRecordModel
{
    protected static $objectApiName = 'ListEmailRecipientSource';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'Name' => null,
        'CurrencyIsoCode' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'ListEmailId' => null,
        'SourceListId' => null,
        'SourceType' => null,
    ];
}

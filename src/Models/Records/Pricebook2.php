<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class Pricebook2
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method Pricebook2[] query()
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
 * @property \Carbon\Carbon LastViewedDate
 * @property \Carbon\Carbon LastReferencedDate
 * @property bool IsActive
 * @property bool IsArchived
 * @property string Description
 * @property bool IsStandard
 */
class Pricebook2 extends BaseRecordModel
{
    protected static $objectApiName = 'Pricebook2';
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
        'LastViewedDate' => 'datetime',
        'LastReferencedDate' => 'datetime',
        'IsActive' => 'bool',
        'IsArchived' => 'bool',
        'Description' => null,
        'IsStandard' => 'bool',
    ];
}

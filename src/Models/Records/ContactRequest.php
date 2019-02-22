<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ContactRequest
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ContactRequest[] query()
 *
 * @property string $Id
 * @property string $OwnerId
 * @property bool $IsDeleted
 * @property string $Name
 * @property string $CurrencyIsoCode
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property \Carbon\Carbon $LastViewedDate
 * @property \Carbon\Carbon $LastReferencedDate
 * @property string $WhatId
 * @property string $WhoId
 * @property mixed $PreferredPhone
 * @property string $PreferredChannel
 * @property string $Status
 * @property string $RequestReason
 * @property string $RequestDescription
 */
class ContactRequest extends BaseRecordModel
{
    public static $objectApiName = 'ContactRequest';
    protected $defaultFields = [
        'Id' => null,
        'OwnerId' => null,
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
        'WhatId' => null,
        'WhoId' => null,
        'PreferredPhone' => null,
        'PreferredChannel' => null,
        'Status' => null,
        'RequestReason' => null,
        'RequestDescription' => null,
    ];
}

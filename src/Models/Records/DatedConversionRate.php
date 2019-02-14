<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class DatedConversionRate
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method DatedConversionRate[] query()
 *
 * @property string Id
 * @property mixed IsoCode
 * @property \Carbon\Carbon StartDate
 * @property \Carbon\Carbon NextStartDate
 * @property float ConversionRate
 * @property \Carbon\Carbon CreatedDate
 * @property string CreatedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property string LastModifiedById
 * @property \Carbon\Carbon SystemModstamp
 */
class DatedConversionRate extends BaseRecordModel
{
    protected static $objectApiName = 'DatedConversionRate';
    protected $defaultFields = [
        'Id' => null,
        'IsoCode' => null,
        'StartDate' => 'date',
        'NextStartDate' => 'date',
        'ConversionRate' => 'number:12,6',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
    ];
}

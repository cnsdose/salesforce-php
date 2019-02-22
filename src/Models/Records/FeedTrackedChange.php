<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class FeedTrackedChange
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method FeedTrackedChange[] query()
 *
 * @property string $Id
 * @property string $FeedItemId
 * @property string $FieldName
 * @property mixed $OldValue
 * @property mixed $NewValue
 * @property string $CurrencyIsoCode
 * @property string $OldCurrencyIsoCode
 */
class FeedTrackedChange extends BaseRecordModel
{
    public static $objectApiName = 'FeedTrackedChange';
    protected $defaultFields = [
        'Id' => null,
        'FeedItemId' => null,
        'FieldName' => null,
        'OldValue' => null,
        'NewValue' => null,
        'CurrencyIsoCode' => null,
        'OldCurrencyIsoCode' => null,
    ];
}

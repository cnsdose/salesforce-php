<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class EventBusSubscriber
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method EventBusSubscriber[] query()
 *
 * @property string $Id
 * @property mixed $CurrencyIsoCode
 * @property string $ExternalId
 * @property string $Name
 * @property string $Type
 * @property string $Topic
 * @property mixed $Position
 * @property mixed $Tip
 * @property mixed $Retries
 * @property string $LastError
 * @property mixed $Status
 */
class EventBusSubscriber extends BaseRecordModel
{
    protected static $objectApiName = 'EventBusSubscriber';
    protected $defaultFields = [
        'Id' => null,
        'CurrencyIsoCode' => null,
        'ExternalId' => null,
        'Name' => null,
        'Type' => null,
        'Topic' => null,
        'Position' => null,
        'Tip' => null,
        'Retries' => null,
        'LastError' => null,
        'Status' => null,
    ];
}

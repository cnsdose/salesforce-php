<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class AssetTokenEvent
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method AssetTokenEvent[] query()
 *
 * @property string $ReplayId
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property string $ConnectedAppId
 * @property string $UserId
 * @property string $AssetId
 * @property string $Name
 * @property string $DeviceId
 * @property string $DeviceKey
 * @property \Carbon\Carbon $Expiration
 * @property string $AssetSerialNumber
 * @property string $AssetName
 * @property string $ActorTokenPayload
 */
class AssetTokenEvent extends BaseRecordModel
{
    public static $objectApiName = 'AssetTokenEvent';
    protected $defaultFields = [
        'ReplayId' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'ConnectedAppId' => null,
        'UserId' => null,
        'AssetId' => null,
        'Name' => null,
        'DeviceId' => null,
        'DeviceKey' => null,
        'Expiration' => 'datetime',
        'AssetSerialNumber' => null,
        'AssetName' => null,
        'ActorTokenPayload' => null,
    ];
}

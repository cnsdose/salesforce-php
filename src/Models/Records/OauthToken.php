<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class OauthToken
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method OauthToken[] query()
 *
 * @property string $Id
 * @property string $AccessToken
 * @property string $UserId
 * @property string $RequestToken
 * @property \Carbon\Carbon $CreatedDate
 * @property string $AppName
 * @property \Carbon\Carbon $LastUsedDate
 * @property mixed $UseCount
 * @property string $DeleteToken
 * @property string $AppMenuItemId
 */
class OauthToken extends BaseRecordModel
{
    protected static $objectApiName = 'OauthToken';
    protected $defaultFields = [
        'Id' => null,
        'AccessToken' => null,
        'UserId' => null,
        'RequestToken' => null,
        'CreatedDate' => 'datetime',
        'AppName' => null,
        'LastUsedDate' => 'datetime',
        'UseCount' => null,
        'DeleteToken' => null,
        'AppMenuItemId' => null,
    ];
}

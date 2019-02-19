<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ClientBrowser
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ClientBrowser[] query()
 *
 * @property string $Id
 * @property string $UsersId
 * @property string $FullUserAgent
 * @property string $ProxyInfo
 * @property \Carbon\Carbon $LastUpdate
 * @property \Carbon\Carbon $CreatedDate
 */
class ClientBrowser extends BaseRecordModel
{
    protected static $objectApiName = 'ClientBrowser';
    protected $defaultFields = [
        'Id' => null,
        'UsersId' => null,
        'FullUserAgent' => null,
        'ProxyInfo' => null,
        'LastUpdate' => 'datetime',
        'CreatedDate' => 'datetime',
    ];
}

<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ThirdPartyAccountLink
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ThirdPartyAccountLink[] query()
 *
 * @property string Id
 * @property string ThirdPartyAccountLinkKey
 * @property string UserId
 * @property string SsoProviderId
 * @property string Handle
 * @property string RemoteIdentifier
 * @property string Provider
 * @property string SsoProviderName
 * @property bool IsNotSsoUsable
 */
class ThirdPartyAccountLink extends BaseRecordModel
{
    protected static $objectApiName = 'ThirdPartyAccountLink';
    protected $defaultFields = [
        'Id' => null,
        'ThirdPartyAccountLinkKey' => null,
        'UserId' => null,
        'SsoProviderId' => null,
        'Handle' => null,
        'RemoteIdentifier' => null,
        'Provider' => null,
        'SsoProviderName' => null,
        'IsNotSsoUsable' => 'bool',
    ];
}

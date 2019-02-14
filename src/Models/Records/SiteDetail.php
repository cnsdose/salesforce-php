<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class SiteDetail
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method SiteDetail[] query()
 *
 * @property string Id
 * @property string DurableId
 * @property bool IsRegistrationEnabled
 * @property mixed SecureUrl
 */
class SiteDetail extends BaseRecordModel
{
    protected static $objectApiName = 'SiteDetail';
    protected $defaultFields = [
        'Id' => null,
        'DurableId' => null,
        'IsRegistrationEnabled' => 'bool',
        'SecureUrl' => null,
    ];
}

<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class OrgWideEmailAddress
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method OrgWideEmailAddress[] query()
 *
 * @property string $Id
 * @property string $CreatedById
 * @property \Carbon\Carbon $CreatedDate
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property mixed $Address
 * @property string $DisplayName
 * @property bool $IsAllowAllProfiles
 */
class OrgWideEmailAddress extends BaseRecordModel
{
    protected static $objectApiName = 'OrgWideEmailAddress';
    protected $defaultFields = [
        'Id' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'Address' => null,
        'DisplayName' => null,
        'IsAllowAllProfiles' => 'bool',
    ];
}

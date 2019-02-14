<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class CaseTeamRole
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method CaseTeamRole[] query()
 *
 * @property string Id
 * @property string Name
 * @property mixed AccessLevel
 * @property bool PreferencesVisibleInCSP
 * @property \Carbon\Carbon CreatedDate
 * @property string CreatedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property string LastModifiedById
 * @property \Carbon\Carbon SystemModstamp
 */
class CaseTeamRole extends BaseRecordModel
{
    protected static $objectApiName = 'CaseTeamRole';
    protected $defaultFields = [
        'Id' => null,
        'Name' => null,
        'AccessLevel' => null,
        'PreferencesVisibleInCSP' => 'bool',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
    ];
}

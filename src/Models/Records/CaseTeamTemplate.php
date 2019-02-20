<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class CaseTeamTemplate
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method CaseTeamTemplate[] query()
 *
 * @property string $Id
 * @property string $Name
 * @property string $Description
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 */
class CaseTeamTemplate extends BaseRecordModel
{
    public static $objectApiName = 'CaseTeamTemplate';
    protected $defaultFields = [
        'Id' => null,
        'Name' => null,
        'Description' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
    ];
}

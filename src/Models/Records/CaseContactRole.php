<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class CaseContactRole
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method CaseContactRole[] query()
 *
 * @property string Id
 * @property string CasesId
 * @property string ContactId
 * @property mixed Role
 * @property \Carbon\Carbon CreatedDate
 * @property string CreatedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property string LastModifiedById
 * @property \Carbon\Carbon SystemModstamp
 * @property bool IsDeleted
 */
class CaseContactRole extends BaseRecordModel
{
    protected static $objectApiName = 'CaseContactRole';
    protected $defaultFields = [
        'Id' => null,
        'CasesId' => null,
        'ContactId' => null,
        'Role' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'IsDeleted' => 'bool',
    ];
}

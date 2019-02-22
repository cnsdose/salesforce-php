<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class CaseShare
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method CaseShare[] query()
 *
 * @property string $Id
 * @property string $CaseId
 * @property string $UserOrGroupId
 * @property string $CaseAccessLevel
 * @property string $RowCause
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property bool $IsDeleted
 */
class CaseShare extends BaseRecordModel
{
    public static $objectApiName = 'CaseShare';
    protected $defaultFields = [
        'Id' => null,
        'CaseId' => null,
        'UserOrGroupId' => null,
        'CaseAccessLevel' => null,
        'RowCause' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'IsDeleted' => 'bool',
    ];
}

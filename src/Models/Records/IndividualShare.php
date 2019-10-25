<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class IndividualShare
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method IndividualShare[] query()
 *
 * @property string $Id
 * @property string $IndividualId
 * @property string $UserOrGroupId
 * @property string $IndividualAccessLevel
 * @property string $RowCause
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property bool $IsDeleted
 */
class IndividualShare extends BaseRecordModel
{
    public static $objectApiName = 'IndividualShare';
    protected $defaultFields = [
        'Id' => null,
        'IndividualId' => null,
        'UserOrGroupId' => null,
        'IndividualAccessLevel' => null,
        'RowCause' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'IsDeleted' => 'bool',
    ];
}

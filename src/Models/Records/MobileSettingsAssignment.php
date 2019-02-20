<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class MobileSettingsAssignment
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method MobileSettingsAssignment[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $FieldServiceMobileSettingsId
 * @property string $ProfileId
 */
class MobileSettingsAssignment extends BaseRecordModel
{
    public static $objectApiName = 'MobileSettingsAssignment';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'FieldServiceMobileSettingsId' => null,
        'ProfileId' => null,
    ];
}

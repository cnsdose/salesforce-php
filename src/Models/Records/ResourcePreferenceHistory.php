<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ResourcePreferenceHistory
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ResourcePreferenceHistory[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $ResourcePreferenceId
 * @property string $CreatedById
 * @property \Carbon\Carbon $CreatedDate
 * @property mixed $Field
 * @property mixed $OldValue
 * @property mixed $NewValue
 */
class ResourcePreferenceHistory extends BaseRecordModel
{
    public static $objectApiName = 'ResourcePreferenceHistory';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'ResourcePreferenceId' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'Field' => null,
        'OldValue' => null,
        'NewValue' => null,
    ];
}

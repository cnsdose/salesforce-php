<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class SetupEntityAccess
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method SetupEntityAccess[] query()
 *
 * @property string $Id
 * @property string $ParentId
 * @property string $SetupEntityId
 * @property string $SetupEntityType
 * @property \Carbon\Carbon $SystemModstamp
 */
class SetupEntityAccess extends BaseRecordModel
{
    public static $objectApiName = 'SetupEntityAccess';
    protected $defaultFields = [
        'Id' => null,
        'ParentId' => null,
        'SetupEntityId' => null,
        'SetupEntityType' => null,
        'SystemModstamp' => 'datetime',
    ];
}

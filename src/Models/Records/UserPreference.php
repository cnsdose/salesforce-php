<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class UserPreference
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method UserPreference[] query()
 *
 * @property string $Id
 * @property string $UserId
 * @property mixed $Preference
 * @property string $Value
 * @property \Carbon\Carbon $SystemModstamp
 */
class UserPreference extends BaseRecordModel
{
    public static $objectApiName = 'UserPreference';
    protected $defaultFields = [
        'Id' => null,
        'UserId' => null,
        'Preference' => null,
        'Value' => null,
        'SystemModstamp' => 'datetime',
    ];
}

<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class UserLogin
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method UserLogin[] query()
 *
 * @property string Id
 * @property string UserId
 * @property bool IsFrozen
 * @property bool IsPasswordLocked
 * @property \Carbon\Carbon LastModifiedDate
 * @property string LastModifiedById
 */
class UserLogin extends BaseRecordModel
{
    protected static $objectApiName = 'UserLogin';
    protected $defaultFields = [
        'Id' => null,
        'UserId' => null,
        'IsFrozen' => 'bool',
        'IsPasswordLocked' => 'bool',
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
    ];
}

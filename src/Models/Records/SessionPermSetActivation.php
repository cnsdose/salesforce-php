<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class SessionPermSetActivation
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method SessionPermSetActivation[] query()
 *
 * @property string Id
 * @property bool IsDeleted
 * @property \Carbon\Carbon CreatedDate
 * @property string CreatedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property string LastModifiedById
 * @property \Carbon\Carbon SystemModstamp
 * @property string AuthSessionId
 * @property string PermissionSetId
 * @property string UserId
 * @property string Description
 */
class SessionPermSetActivation extends BaseRecordModel
{
    protected static $objectApiName = 'SessionPermSetActivation';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'AuthSessionId' => null,
        'PermissionSetId' => null,
        'UserId' => null,
        'Description' => null,
    ];
}

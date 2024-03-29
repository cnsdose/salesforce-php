<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class LoginIp
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method LoginIp[] query()
 *
 * @property string $Id
 * @property string $UsersId
 * @property string $SourceIp
 * @property \Carbon\Carbon $CreatedDate
 * @property bool $IsAuthenticated
 * @property \Carbon\Carbon $ChallengeSentDate
 * @property string $ChallengeMethod
 */
class LoginIp extends BaseRecordModel
{
    public static $objectApiName = 'LoginIp';
    protected $defaultFields = [
        'Id' => null,
        'UsersId' => null,
        'SourceIp' => null,
        'CreatedDate' => 'datetime',
        'IsAuthenticated' => 'bool',
        'ChallengeSentDate' => 'datetime',
        'ChallengeMethod' => null,
    ];
}

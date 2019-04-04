<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class SocialPersonaHistory
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method SocialPersonaHistory[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $SocialPersonaId
 * @property string $CreatedById
 * @property \Carbon\Carbon $CreatedDate
 * @property string $Field
 * @property mixed $OldValue
 * @property mixed $NewValue
 */
class SocialPersonaHistory extends BaseRecordModel
{
    public static $objectApiName = 'SocialPersonaHistory';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'SocialPersonaId' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'Field' => null,
        'OldValue' => null,
        'NewValue' => null,
    ];
}

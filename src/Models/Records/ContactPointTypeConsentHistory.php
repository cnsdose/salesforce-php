<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ContactPointTypeConsentHistory
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ContactPointTypeConsentHistory[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $ContactPointTypeConsentId
 * @property string $CreatedById
 * @property \Carbon\Carbon $CreatedDate
 * @property string $Field
 * @property mixed $OldValue
 * @property mixed $NewValue
 */
class ContactPointTypeConsentHistory extends BaseRecordModel
{
    public static $objectApiName = 'ContactPointTypeConsentHistory';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'ContactPointTypeConsentId' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'Field' => null,
        'OldValue' => null,
        'NewValue' => null,
    ];
}

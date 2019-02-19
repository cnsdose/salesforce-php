<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class EntitlementTemplate
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method EntitlementTemplate[] query()
 *
 * @property string $Id
 * @property string $Name
 * @property string $BusinessHoursId
 * @property mixed $Type
 * @property string $SlaProcessId
 * @property bool $IsPerIncident
 * @property mixed $CasesPerEntitlement
 * @property mixed $Term
 * @property \Carbon\Carbon $SystemModstamp
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property string $NamespacePrefix
 */
class EntitlementTemplate extends BaseRecordModel
{
    protected static $objectApiName = 'EntitlementTemplate';
    protected $defaultFields = [
        'Id' => null,
        'Name' => null,
        'BusinessHoursId' => null,
        'Type' => null,
        'SlaProcessId' => null,
        'IsPerIncident' => 'bool',
        'CasesPerEntitlement' => null,
        'Term' => null,
        'SystemModstamp' => 'datetime',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'NamespacePrefix' => null,
    ];
}

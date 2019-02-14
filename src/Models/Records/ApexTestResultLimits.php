<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ApexTestResultLimits
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ApexTestResultLimits[] query()
 *
 * @property string Id
 * @property bool IsDeleted
 * @property \Carbon\Carbon CreatedDate
 * @property string CreatedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property string LastModifiedById
 * @property \Carbon\Carbon SystemModstamp
 * @property string ApexTestResultId
 * @property mixed Soql
 * @property mixed QueryRows
 * @property mixed Sosl
 * @property mixed Dml
 * @property mixed DmlRows
 * @property mixed Cpu
 * @property mixed Callouts
 * @property mixed Email
 * @property mixed AsyncCalls
 * @property mixed MobilePush
 * @property string LimitContext
 * @property string LimitExceptions
 */
class ApexTestResultLimits extends BaseRecordModel
{
    protected static $objectApiName = 'ApexTestResultLimits';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'ApexTestResultId' => null,
        'Soql' => null,
        'QueryRows' => null,
        'Sosl' => null,
        'Dml' => null,
        'DmlRows' => null,
        'Cpu' => null,
        'Callouts' => null,
        'Email' => null,
        'AsyncCalls' => null,
        'MobilePush' => null,
        'LimitContext' => null,
        'LimitExceptions' => null,
    ];
}

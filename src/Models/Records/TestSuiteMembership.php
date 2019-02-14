<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class TestSuiteMembership
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method TestSuiteMembership[] query()
 *
 * @property string Id
 * @property bool IsDeleted
 * @property \Carbon\Carbon CreatedDate
 * @property string CreatedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property string LastModifiedById
 * @property \Carbon\Carbon SystemModstamp
 * @property string ApexTestSuiteId
 * @property string ApexClassId
 */
class TestSuiteMembership extends BaseRecordModel
{
    protected static $objectApiName = 'TestSuiteMembership';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'ApexTestSuiteId' => null,
        'ApexClassId' => null,
    ];
}

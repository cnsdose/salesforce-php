<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ProcessDefinition
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ProcessDefinition[] query()
 *
 * @property string Id
 * @property string Name
 * @property string DeveloperName
 * @property mixed Type
 * @property string Description
 * @property mixed TableEnumOrId
 * @property mixed LockType
 * @property mixed State
 * @property \Carbon\Carbon CreatedDate
 * @property string CreatedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property string LastModifiedById
 * @property \Carbon\Carbon SystemModstamp
 */
class ProcessDefinition extends BaseRecordModel
{
    protected static $objectApiName = 'ProcessDefinition';
    protected $defaultFields = [
        'Id' => null,
        'Name' => null,
        'DeveloperName' => null,
        'Type' => null,
        'Description' => null,
        'TableEnumOrId' => null,
        'LockType' => null,
        'State' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
    ];
}

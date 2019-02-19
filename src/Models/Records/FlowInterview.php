<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class FlowInterview
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method FlowInterview[] query()
 *
 * @property string $Id
 * @property string $OwnerId
 * @property bool $IsDeleted
 * @property string $Name
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $CurrentElement
 * @property string $InterviewLabel
 * @property string $PauseLabel
 * @property string $Guid
 */
class FlowInterview extends BaseRecordModel
{
    protected static $objectApiName = 'FlowInterview';
    protected $defaultFields = [
        'Id' => null,
        'OwnerId' => null,
        'IsDeleted' => 'bool',
        'Name' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'CurrentElement' => null,
        'InterviewLabel' => null,
        'PauseLabel' => null,
        'Guid' => null,
    ];
}

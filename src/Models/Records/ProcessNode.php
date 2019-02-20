<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ProcessNode
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ProcessNode[] query()
 *
 * @property string $Id
 * @property string $Name
 * @property string $DeveloperName
 * @property string $ProcessDefinitionId
 * @property string $Description
 * @property \Carbon\Carbon $SystemModstamp
 */
class ProcessNode extends BaseRecordModel
{
    public static $objectApiName = 'ProcessNode';
    protected $defaultFields = [
        'Id' => null,
        'Name' => null,
        'DeveloperName' => null,
        'ProcessDefinitionId' => null,
        'Description' => null,
        'SystemModstamp' => 'datetime',
    ];
}

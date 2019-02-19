<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class CustomHelpMenuSection
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method CustomHelpMenuSection[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $DeveloperName
 * @property mixed $Language
 * @property string $MasterLabel
 * @property string $NamespacePrefix
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 */
class CustomHelpMenuSection extends BaseRecordModel
{
    protected static $objectApiName = 'CustomHelpMenuSection';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'DeveloperName' => null,
        'Language' => null,
        'MasterLabel' => null,
        'NamespacePrefix' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
    ];
}

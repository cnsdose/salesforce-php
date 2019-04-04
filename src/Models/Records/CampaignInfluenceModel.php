<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class CampaignInfluenceModel
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method CampaignInfluenceModel[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $DeveloperName
 * @property string $Language
 * @property string $MasterLabel
 * @property string $NamespacePrefix
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $ModelType
 * @property string $ModelDescription
 * @property bool $IsDefaultModel
 * @property bool $IsModelLocked
 * @property bool $IsActive
 * @property string $RecordPreference
 */
class CampaignInfluenceModel extends BaseRecordModel
{
    public static $objectApiName = 'CampaignInfluenceModel';
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
        'ModelType' => null,
        'ModelDescription' => null,
        'IsDefaultModel' => 'bool',
        'IsModelLocked' => 'bool',
        'IsActive' => 'bool',
        'RecordPreference' => null,
    ];
}

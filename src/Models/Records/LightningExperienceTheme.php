<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class LightningExperienceTheme
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method LightningExperienceTheme[] query()
 *
 * @property string Id
 * @property bool IsDeleted
 * @property string DeveloperName
 * @property mixed Language
 * @property string MasterLabel
 * @property string NamespacePrefix
 * @property \Carbon\Carbon CreatedDate
 * @property string CreatedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property string LastModifiedById
 * @property \Carbon\Carbon SystemModstamp
 * @property string DefaultBrandingSetId
 * @property bool ShouldOverrideLoadingImage
 * @property string Description
 */
class LightningExperienceTheme extends BaseRecordModel
{
    protected static $objectApiName = 'LightningExperienceTheme';
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
        'DefaultBrandingSetId' => null,
        'ShouldOverrideLoadingImage' => 'bool',
        'Description' => null,
    ];
}

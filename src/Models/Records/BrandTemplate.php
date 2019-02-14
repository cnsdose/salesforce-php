<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class BrandTemplate
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method BrandTemplate[] query()
 *
 * @property string Id
 * @property string Name
 * @property string DeveloperName
 * @property bool IsActive
 * @property string Description
 * @property string Value
 * @property string NamespacePrefix
 * @property \Carbon\Carbon CreatedDate
 * @property string CreatedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property string LastModifiedById
 * @property \Carbon\Carbon SystemModstamp
 */
class BrandTemplate extends BaseRecordModel
{
    protected static $objectApiName = 'BrandTemplate';
    protected $defaultFields = [
        'Id' => null,
        'Name' => null,
        'DeveloperName' => null,
        'IsActive' => 'bool',
        'Description' => null,
        'Value' => null,
        'NamespacePrefix' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
    ];
}

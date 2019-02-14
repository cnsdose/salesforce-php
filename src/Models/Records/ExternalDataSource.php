<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ExternalDataSource
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ExternalDataSource[] query()
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
 * @property mixed Type
 * @property string Endpoint
 * @property string Repository
 * @property bool IsWritable
 * @property mixed PrincipalType
 * @property mixed Protocol
 * @property string AuthProviderId
 * @property string LargeIconId
 * @property string SmallIconId
 * @property string CustomConfiguration
 */
class ExternalDataSource extends BaseRecordModel
{
    protected static $objectApiName = 'ExternalDataSource';
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
        'Type' => null,
        'Endpoint' => null,
        'Repository' => null,
        'IsWritable' => 'bool',
        'PrincipalType' => null,
        'Protocol' => null,
        'AuthProviderId' => null,
        'LargeIconId' => null,
        'SmallIconId' => null,
        'CustomConfiguration' => null,
    ];
}

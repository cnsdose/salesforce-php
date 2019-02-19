<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class AuthConfig
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method AuthConfig[] query()
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
 * @property string $Url
 * @property bool $AuthOptionsUsernamePassword
 * @property bool $AuthOptionsSaml
 * @property bool $AuthOptionsAuthProvider
 * @property bool $AuthOptionsCertificate
 * @property bool $IsActive
 * @property mixed $Type
 */
class AuthConfig extends BaseRecordModel
{
    protected static $objectApiName = 'AuthConfig';
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
        'Url' => null,
        'AuthOptionsUsernamePassword' => 'bool',
        'AuthOptionsSaml' => 'bool',
        'AuthOptionsAuthProvider' => 'bool',
        'AuthOptionsCertificate' => 'bool',
        'IsActive' => 'bool',
        'Type' => null,
    ];
}

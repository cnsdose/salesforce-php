<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class NamedCredential
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method NamedCredential[] query()
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
 * @property string $Endpoint
 * @property string $PrincipalType
 * @property bool $CalloutOptionsGenerateAuthorizationHeader
 * @property bool $CalloutOptionsAllowMergeFieldsInHeader
 * @property bool $CalloutOptionsAllowMergeFieldsInBody
 * @property string $AuthProviderId
 * @property string $JwtIssuer
 * @property string $JwtFormulaSubject
 * @property string $JwtTextSubject
 * @property mixed $JwtValidityPeriodSeconds
 * @property string $JwtAudience
 * @property string $AuthTokenEndpointUrl
 */
class NamedCredential extends BaseRecordModel
{
    public static $objectApiName = 'NamedCredential';
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
        'Endpoint' => null,
        'PrincipalType' => null,
        'CalloutOptionsGenerateAuthorizationHeader' => 'bool',
        'CalloutOptionsAllowMergeFieldsInHeader' => 'bool',
        'CalloutOptionsAllowMergeFieldsInBody' => 'bool',
        'AuthProviderId' => null,
        'JwtIssuer' => null,
        'JwtFormulaSubject' => null,
        'JwtTextSubject' => null,
        'JwtValidityPeriodSeconds' => null,
        'JwtAudience' => null,
        'AuthTokenEndpointUrl' => null,
    ];
}

<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class EmailServicesFunction
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method EmailServicesFunction[] query()
 *
 * @property string $Id
 * @property bool $IsActive
 * @property string $FunctionName
 * @property string $AuthorizedSenders
 * @property bool $IsAuthenticationRequired
 * @property bool $IsTlsRequired
 * @property string $AttachmentOption
 * @property string $ApexClassId
 * @property string $OverLimitAction
 * @property string $FunctionInactiveAction
 * @property string $AddressInactiveAction
 * @property string $AuthenticationFailureAction
 * @property string $AuthorizationFailureAction
 * @property bool $IsErrorRoutingEnabled
 * @property mixed $ErrorRoutingAddress
 * @property bool $IsTextAttachmentsAsBinary
 * @property string $CreatedById
 * @property \Carbon\Carbon $CreatedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property \Carbon\Carbon $SystemModstamp
 */
class EmailServicesFunction extends BaseRecordModel
{
    public static $objectApiName = 'EmailServicesFunction';
    protected $defaultFields = [
        'Id' => null,
        'IsActive' => 'bool',
        'FunctionName' => null,
        'AuthorizedSenders' => null,
        'IsAuthenticationRequired' => 'bool',
        'IsTlsRequired' => 'bool',
        'AttachmentOption' => null,
        'ApexClassId' => null,
        'OverLimitAction' => null,
        'FunctionInactiveAction' => null,
        'AddressInactiveAction' => null,
        'AuthenticationFailureAction' => null,
        'AuthorizationFailureAction' => null,
        'IsErrorRoutingEnabled' => 'bool',
        'ErrorRoutingAddress' => null,
        'IsTextAttachmentsAsBinary' => 'bool',
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'LastModifiedById' => null,
        'LastModifiedDate' => 'datetime',
        'SystemModstamp' => 'datetime',
    ];
}

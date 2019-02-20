<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class EmailServicesAddress
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method EmailServicesAddress[] query()
 *
 * @property string $Id
 * @property bool $IsActive
 * @property string $LocalPart
 * @property string $EmailDomainName
 * @property string $AuthorizedSenders
 * @property string $RunAsUserId
 * @property string $FunctionId
 * @property string $DeveloperName
 * @property string $CreatedById
 * @property \Carbon\Carbon $CreatedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property \Carbon\Carbon $SystemModstamp
 */
class EmailServicesAddress extends BaseRecordModel
{
    public static $objectApiName = 'EmailServicesAddress';
    protected $defaultFields = [
        'Id' => null,
        'IsActive' => 'bool',
        'LocalPart' => null,
        'EmailDomainName' => null,
        'AuthorizedSenders' => null,
        'RunAsUserId' => null,
        'FunctionId' => null,
        'DeveloperName' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'LastModifiedById' => null,
        'LastModifiedDate' => 'datetime',
        'SystemModstamp' => 'datetime',
    ];
}

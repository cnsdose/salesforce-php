<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class Domain
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method Domain[] query()
 *
 * @property string $Id
 * @property string $DomainType
 * @property string $Domain
 * @property bool $OptionsExternalHttps
 * @property string $CnameTarget
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 */
class Domain extends BaseRecordModel
{
    public static $objectApiName = 'Domain';
    protected $defaultFields = [
        'Id' => null,
        'DomainType' => null,
        'Domain' => null,
        'OptionsExternalHttps' => 'bool',
        'CnameTarget' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
    ];
}

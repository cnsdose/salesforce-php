<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class MyDomainDiscoverableLogin
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method MyDomainDiscoverableLogin[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $DeveloperName
 * @property mixed $Language
 * @property string $MasterLabel
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $ApexHandlerId
 * @property string $ExecuteApexHandlerAsId
 * @property string $UsernameLabel
 */
class MyDomainDiscoverableLogin extends BaseRecordModel
{
    protected static $objectApiName = 'MyDomainDiscoverableLogin';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'DeveloperName' => null,
        'Language' => null,
        'MasterLabel' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'ApexHandlerId' => null,
        'ExecuteApexHandlerAsId' => null,
        'UsernameLabel' => null,
    ];
}

<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ApexClass
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ApexClass[] query()
 *
 * @property string $Id
 * @property string $NamespacePrefix
 * @property string $Name
 * @property float $ApiVersion
 * @property mixed $Status
 * @property bool $IsValid
 * @property float $BodyCrc
 * @property string $Body
 * @property mixed $LengthWithoutComments
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 */
class ApexClass extends BaseRecordModel
{
    protected static $objectApiName = 'ApexClass';
    protected $defaultFields = [
        'Id' => null,
        'NamespacePrefix' => null,
        'Name' => null,
        'ApiVersion' => 'number:17,1',
        'Status' => null,
        'IsValid' => 'bool',
        'BodyCrc' => 'number:18,0',
        'Body' => null,
        'LengthWithoutComments' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
    ];
}

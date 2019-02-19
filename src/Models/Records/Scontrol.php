<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class Scontrol
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method Scontrol[] query()
 *
 * @property string $Id
 * @property string $Name
 * @property string $DeveloperName
 * @property string $Description
 * @property mixed $EncodingKey
 * @property string $HtmlWrapper
 * @property string $Filename
 * @property mixed $BodyLength
 * @property mixed $Binary
 * @property mixed $ContentSource
 * @property bool $SupportsCaching
 * @property string $NamespacePrefix
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property bool $IsDeleted
 */
class Scontrol extends BaseRecordModel
{
    protected static $objectApiName = 'Scontrol';
    protected $defaultFields = [
        'Id' => null,
        'Name' => null,
        'DeveloperName' => null,
        'Description' => null,
        'EncodingKey' => null,
        'HtmlWrapper' => null,
        'Filename' => null,
        'BodyLength' => null,
        'Binary' => null,
        'ContentSource' => null,
        'SupportsCaching' => 'bool',
        'NamespacePrefix' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'IsDeleted' => 'bool',
    ];
}

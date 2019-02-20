<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class Group
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method Group[] query()
 *
 * @property string $Id
 * @property string $Name
 * @property string $DeveloperName
 * @property string $RelatedId
 * @property mixed $Type
 * @property mixed $Email
 * @property string $OwnerId
 * @property bool $DoesSendEmailToMembers
 * @property bool $DoesIncludeBosses
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 */
class Group extends BaseRecordModel
{
    public static $objectApiName = 'Group';
    protected $defaultFields = [
        'Id' => null,
        'Name' => null,
        'DeveloperName' => null,
        'RelatedId' => null,
        'Type' => null,
        'Email' => null,
        'OwnerId' => null,
        'DoesSendEmailToMembers' => 'bool',
        'DoesIncludeBosses' => 'bool',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
    ];
}

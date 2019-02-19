<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class MailmergeTemplate
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method MailmergeTemplate[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $Name
 * @property string $Description
 * @property string $Filename
 * @property mixed $BodyLength
 * @property mixed $Body
 * @property \Carbon\Carbon $LastUsedDate
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property bool $SecurityOptionsAttachmentScannedForXSS
 * @property bool $SecurityOptionsAttachmentHasXSSThreat
 * @property bool $SecurityOptionsAttachmentScannedforFlash
 * @property bool $SecurityOptionsAttachmentHasFlash
 */
class MailmergeTemplate extends BaseRecordModel
{
    protected static $objectApiName = 'MailmergeTemplate';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'Name' => null,
        'Description' => null,
        'Filename' => null,
        'BodyLength' => null,
        'Body' => null,
        'LastUsedDate' => 'datetime',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'SecurityOptionsAttachmentScannedForXSS' => 'bool',
        'SecurityOptionsAttachmentHasXSSThreat' => 'bool',
        'SecurityOptionsAttachmentScannedforFlash' => 'bool',
        'SecurityOptionsAttachmentHasFlash' => 'bool',
    ];
}

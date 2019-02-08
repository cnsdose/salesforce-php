<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Support;

use CNSDose\Salesforce\Models\BaseModel;

/**
 * Class EmailMessage
 * @package CNSDose\Salesforce\Models\Support
 *
 * @method EmailMessage[] query()
 *
 * @property string Id
 * @property string ParentId
 * @property string ActivityId
 * @property string CreatedById
 * @property \Carbon\Carbon CreatedDate
 * @property \Carbon\Carbon LastModifiedDate
 * @property string LastModifiedById
 * @property \Carbon\Carbon SystemModstamp
 * @property string TextBody
 * @property string HtmlBody
 * @property string Headers
 * @property string Subject
 * @property string FromName
 * @property mixed FromAddress
 * @property mixed ValidatedFromAddress
 * @property string ToAddress
 * @property string CcAddress
 * @property string BccAddress
 * @property bool Incoming
 * @property bool HasAttachment
 * @property mixed Status
 * @property \Carbon\Carbon MessageDate
 * @property bool IsDeleted
 * @property string ReplyToEmailMessageId
 * @property bool IsExternallyVisible
 * @property string MessageIdentifier
 * @property string ThreadIdentifier
 * @property bool IsClientManaged
 * @property string RelatedToId
 * @property bool IsTracked
 * @property bool IsOpened
 * @property \Carbon\Carbon FirstOpenedDate
 * @property \Carbon\Carbon LastOpenedDate
 * @property bool IsBounced
 */
class EmailMessage extends BaseModel
{
    protected static $objectApiName = 'EmailMessage';
    protected $defaultFields = [
        'Id' => null,
        'ParentId' => null,
        'ActivityId' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'TextBody' => null,
        'HtmlBody' => null,
        'Headers' => null,
        'Subject' => null,
        'FromName' => null,
        'FromAddress' => null,
        'ValidatedFromAddress' => null,
        'ToAddress' => null,
        'CcAddress' => null,
        'BccAddress' => null,
        'Incoming' => 'bool',
        'HasAttachment' => 'bool',
        'Status' => null,
        'MessageDate' => 'datetime',
        'IsDeleted' => 'bool',
        'ReplyToEmailMessageId' => null,
        'IsExternallyVisible' => 'bool',
        'MessageIdentifier' => null,
        'ThreadIdentifier' => null,
        'IsClientManaged' => 'bool',
        'RelatedToId' => null,
        'IsTracked' => 'bool',
        'IsOpened' => 'bool',
        'FirstOpenedDate' => 'datetime',
        'LastOpenedDate' => 'datetime',
        'IsBounced' => 'bool',
    ];
}

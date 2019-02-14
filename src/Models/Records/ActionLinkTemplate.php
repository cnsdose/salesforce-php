<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ActionLinkTemplate
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ActionLinkTemplate[] query()
 *
 * @property string Id
 * @property bool IsDeleted
 * @property \Carbon\Carbon CreatedDate
 * @property string CreatedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property string LastModifiedById
 * @property \Carbon\Carbon SystemModstamp
 * @property string ActionLinkGroupTemplateId
 * @property string LabelKey
 * @property mixed Method
 * @property mixed LinkType
 * @property mixed Position
 * @property bool IsConfirmationRequired
 * @property bool IsGroupDefault
 * @property mixed UserVisibility
 * @property string UserAlias
 * @property string Label
 * @property string ActionUrl
 * @property string RequestBody
 * @property string Headers
 */
class ActionLinkTemplate extends BaseRecordModel
{
    protected static $objectApiName = 'ActionLinkTemplate';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'ActionLinkGroupTemplateId' => null,
        'LabelKey' => null,
        'Method' => null,
        'LinkType' => null,
        'Position' => null,
        'IsConfirmationRequired' => 'bool',
        'IsGroupDefault' => 'bool',
        'UserVisibility' => null,
        'UserAlias' => null,
        'Label' => null,
        'ActionUrl' => null,
        'RequestBody' => null,
        'Headers' => null,
    ];
}

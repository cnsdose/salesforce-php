<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class PlatformAction
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method PlatformAction[] query()
 *
 * @property string $Id
 * @property string $ExternalId
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $Label
 * @property string $Type
 * @property string $Subtype
 * @property string $ApiName
 * @property string $ActionTarget
 * @property string $ActionTargetType
 * @property string $ConfirmationMessage
 * @property string $GroupId
 * @property bool $IsGroupDefault
 * @property string $Category
 * @property string $InvocationStatus
 * @property string $InvokedByUserId
 * @property string $SourceEntity
 * @property string $ActionListContext
 * @property string $DeviceFormat
 * @property string $IconContentType
 * @property mixed $IconHeight
 * @property mixed $IconWidth
 * @property mixed $IconUrl
 * @property bool $IsMassAction
 * @property string $PrimaryColor
 * @property string $RelatedSourceEntity
 * @property string $Section
 * @property string $RelatedListRecordId
 * @property string $TargetUrl
 * @property string $TargetObject
 * @property string $OpenType
 */
class PlatformAction extends BaseRecordModel
{
    public static $objectApiName = 'PlatformAction';
    protected $defaultFields = [
        'Id' => null,
        'ExternalId' => null,
        'LastModifiedDate' => 'datetime',
        'Label' => null,
        'Type' => null,
        'Subtype' => null,
        'ApiName' => null,
        'ActionTarget' => null,
        'ActionTargetType' => null,
        'ConfirmationMessage' => null,
        'GroupId' => null,
        'IsGroupDefault' => 'bool',
        'Category' => null,
        'InvocationStatus' => null,
        'InvokedByUserId' => null,
        'SourceEntity' => null,
        'ActionListContext' => null,
        'DeviceFormat' => null,
        'IconContentType' => null,
        'IconHeight' => null,
        'IconWidth' => null,
        'IconUrl' => null,
        'IsMassAction' => 'bool',
        'PrimaryColor' => null,
        'RelatedSourceEntity' => null,
        'Section' => null,
        'RelatedListRecordId' => null,
        'TargetUrl' => null,
        'TargetObject' => null,
        'OpenType' => null,
    ];
}

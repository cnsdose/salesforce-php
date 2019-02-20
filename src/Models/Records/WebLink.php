<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class WebLink
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method WebLink[] query()
 *
 * @property string $Id
 * @property mixed $PageOrSobjectType
 * @property string $Name
 * @property bool $IsProtected
 * @property string $Url
 * @property mixed $EncodingKey
 * @property mixed $LinkType
 * @property mixed $OpenType
 * @property mixed $Height
 * @property mixed $Width
 * @property bool $ShowsLocation
 * @property bool $HasScrollbars
 * @property bool $HasToolbar
 * @property bool $HasMenubar
 * @property bool $ShowsStatus
 * @property bool $IsResizable
 * @property mixed $Position
 * @property string $ScontrolId
 * @property string $MasterLabel
 * @property string $Description
 * @property mixed $DisplayType
 * @property bool $RequireRowSelection
 * @property string $NamespacePrefix
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 */
class WebLink extends BaseRecordModel
{
    public static $objectApiName = 'WebLink';
    protected $defaultFields = [
        'Id' => null,
        'PageOrSobjectType' => null,
        'Name' => null,
        'IsProtected' => 'bool',
        'Url' => null,
        'EncodingKey' => null,
        'LinkType' => null,
        'OpenType' => null,
        'Height' => null,
        'Width' => null,
        'ShowsLocation' => 'bool',
        'HasScrollbars' => 'bool',
        'HasToolbar' => 'bool',
        'HasMenubar' => 'bool',
        'ShowsStatus' => 'bool',
        'IsResizable' => 'bool',
        'Position' => null,
        'ScontrolId' => null,
        'MasterLabel' => null,
        'Description' => null,
        'DisplayType' => null,
        'RequireRowSelection' => 'bool',
        'NamespacePrefix' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
    ];
}

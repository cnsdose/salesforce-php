<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class UserAppMenuItem
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method UserAppMenuItem[] query()
 *
 * @property string $Id
 * @property string $AppMenuItemId
 * @property string $ApplicationId
 * @property string $Label
 * @property string $Description
 * @property string $Name
 * @property mixed $UserSortOrder
 * @property mixed $SortOrder
 * @property string $Type
 * @property mixed $LogoUrl
 * @property mixed $IconUrl
 * @property mixed $InfoUrl
 * @property mixed $StartUrl
 * @property mixed $MobileStartUrl
 * @property bool $IsVisible
 * @property bool $IsUsingAdminAuthorization
 */
class UserAppMenuItem extends BaseRecordModel
{
    public static $objectApiName = 'UserAppMenuItem';
    protected $defaultFields = [
        'Id' => null,
        'AppMenuItemId' => null,
        'ApplicationId' => null,
        'Label' => null,
        'Description' => null,
        'Name' => null,
        'UserSortOrder' => null,
        'SortOrder' => null,
        'Type' => null,
        'LogoUrl' => null,
        'IconUrl' => null,
        'InfoUrl' => null,
        'StartUrl' => null,
        'MobileStartUrl' => null,
        'IsVisible' => 'bool',
        'IsUsingAdminAuthorization' => 'bool',
    ];
}

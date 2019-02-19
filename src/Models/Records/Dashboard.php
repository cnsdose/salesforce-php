<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class Dashboard
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method Dashboard[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $FolderId
 * @property string $FolderName
 * @property string $Title
 * @property string $DeveloperName
 * @property string $NamespacePrefix
 * @property string $Description
 * @property mixed $LeftSize
 * @property mixed $MiddleSize
 * @property mixed $RightSize
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $RunningUserId
 * @property mixed $TitleColor
 * @property mixed $TitleSize
 * @property mixed $TextColor
 * @property mixed $BackgroundStart
 * @property mixed $BackgroundEnd
 * @property mixed $BackgroundDirection
 * @property mixed $Type
 * @property \Carbon\Carbon $LastViewedDate
 * @property \Carbon\Carbon $LastReferencedDate
 * @property string $DashboardResultRefreshedDate
 * @property string $DashboardResultRunningUser
 * @property mixed $ColorPalette
 * @property mixed $ChartTheme
 */
class Dashboard extends BaseRecordModel
{
    protected static $objectApiName = 'Dashboard';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'FolderId' => null,
        'FolderName' => null,
        'Title' => null,
        'DeveloperName' => null,
        'NamespacePrefix' => null,
        'Description' => null,
        'LeftSize' => null,
        'MiddleSize' => null,
        'RightSize' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'RunningUserId' => null,
        'TitleColor' => null,
        'TitleSize' => null,
        'TextColor' => null,
        'BackgroundStart' => null,
        'BackgroundEnd' => null,
        'BackgroundDirection' => null,
        'Type' => null,
        'LastViewedDate' => 'datetime',
        'LastReferencedDate' => 'datetime',
        'DashboardResultRefreshedDate' => null,
        'DashboardResultRunningUser' => null,
        'ColorPalette' => null,
        'ChartTheme' => null,
    ];
}

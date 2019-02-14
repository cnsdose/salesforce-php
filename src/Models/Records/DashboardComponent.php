<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class DashboardComponent
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method DashboardComponent[] query()
 *
 * @property string Id
 * @property string Name
 * @property string DashboardId
 * @property string CustomReportId
 */
class DashboardComponent extends BaseRecordModel
{
    protected static $objectApiName = 'DashboardComponent';
    protected $defaultFields = [
        'Id' => null,
        'Name' => null,
        'DashboardId' => null,
        'CustomReportId' => null,
    ];
}

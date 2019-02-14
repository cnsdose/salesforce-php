<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ServiceReportLayout
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ServiceReportLayout[] query()
 *
 * @property string Id
 * @property bool IsDeleted
 * @property string DeveloperName
 * @property mixed Language
 * @property string MasterLabel
 * @property \Carbon\Carbon CreatedDate
 * @property string CreatedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property string LastModifiedById
 * @property \Carbon\Carbon SystemModstamp
 * @property \Carbon\Carbon LastViewedDate
 */
class ServiceReportLayout extends BaseRecordModel
{
    protected static $objectApiName = 'ServiceReportLayout';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'DeveloperName' => null,
        'Language' => null,
        'MasterLabel' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'LastViewedDate' => 'datetime',
    ];
}

<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class SetupAuditTrail
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method SetupAuditTrail[] query()
 *
 * @property string $Id
 * @property string $Action
 * @property string $Section
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property string $Display
 * @property string $DelegateUser
 * @property string $ResponsibleNamespacePrefix
 */
class SetupAuditTrail extends BaseRecordModel
{
    protected static $objectApiName = 'SetupAuditTrail';
    protected $defaultFields = [
        'Id' => null,
        'Action' => null,
        'Section' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'Display' => null,
        'DelegateUser' => null,
        'ResponsibleNamespacePrefix' => null,
    ];
}

<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ContentDistributionView
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ContentDistributionView[] query()
 *
 * @property string $Id
 * @property string $DistributionId
 * @property string $ParentViewId
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property bool $IsDeleted
 * @property bool $IsInternal
 * @property bool $IsDownload
 */
class ContentDistributionView extends BaseRecordModel
{
    protected static $objectApiName = 'ContentDistributionView';
    protected $defaultFields = [
        'Id' => null,
        'DistributionId' => null,
        'ParentViewId' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'SystemModstamp' => 'datetime',
        'IsDeleted' => 'bool',
        'IsInternal' => 'bool',
        'IsDownload' => 'bool',
    ];
}

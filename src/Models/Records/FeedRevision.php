<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class FeedRevision
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method FeedRevision[] query()
 *
 * @property string $Id
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property bool $IsDeleted
 * @property string $FeedEntityId
 * @property mixed $Revision
 * @property string $Action
 * @property string $EditedAttribute
 * @property string $Value
 * @property bool $IsValueRichText
 */
class FeedRevision extends BaseRecordModel
{
    public static $objectApiName = 'FeedRevision';
    protected $defaultFields = [
        'Id' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'SystemModstamp' => 'datetime',
        'IsDeleted' => 'bool',
        'FeedEntityId' => null,
        'Revision' => null,
        'Action' => null,
        'EditedAttribute' => null,
        'Value' => null,
        'IsValueRichText' => 'bool',
    ];
}

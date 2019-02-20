<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ChatterActivity
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ChatterActivity[] query()
 *
 * @property string $Id
 * @property string $ParentId
 * @property mixed $PostCount
 * @property mixed $CommentCount
 * @property mixed $CommentReceivedCount
 * @property mixed $LikeReceivedCount
 * @property mixed $InfluenceRawRank
 * @property \Carbon\Carbon $SystemModstamp
 */
class ChatterActivity extends BaseRecordModel
{
    public static $objectApiName = 'ChatterActivity';
    protected $defaultFields = [
        'Id' => null,
        'ParentId' => null,
        'PostCount' => null,
        'CommentCount' => null,
        'CommentReceivedCount' => null,
        'LikeReceivedCount' => null,
        'InfluenceRawRank' => null,
        'SystemModstamp' => 'datetime',
    ];
}

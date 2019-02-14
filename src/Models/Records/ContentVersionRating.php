<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ContentVersionRating
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ContentVersionRating[] query()
 *
 * @property string Id
 * @property string UserId
 * @property string ContentVersionId
 * @property mixed Rating
 * @property string UserComment
 * @property \Carbon\Carbon LastModifiedDate
 */
class ContentVersionRating extends BaseRecordModel
{
    protected static $objectApiName = 'ContentVersionRating';
    protected $defaultFields = [
        'Id' => null,
        'UserId' => null,
        'ContentVersionId' => null,
        'Rating' => null,
        'UserComment' => null,
        'LastModifiedDate' => 'datetime',
    ];
}

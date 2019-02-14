<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class EmbeddedServiceLabel
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method EmbeddedServiceLabel[] query()
 *
 * @property string Id
 * @property string DurableId
 * @property string EmbeddedServiceConfigDeveloperName
 * @property mixed LabelKey
 * @property string CustomLabelName
 */
class EmbeddedServiceLabel extends BaseRecordModel
{
    protected static $objectApiName = 'EmbeddedServiceLabel';
    protected $defaultFields = [
        'Id' => null,
        'DurableId' => null,
        'EmbeddedServiceConfigDeveloperName' => null,
        'LabelKey' => null,
        'CustomLabelName' => null,
    ];
}

<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class RecordPageSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableActivityRelatedList
 * @property bool|null $enableFullRecordView
 */
class RecordPageSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEnableActivityRelatedList(bool $enableActivityRelatedList)
    {
        $this->enableActivityRelatedList = $enableActivityRelatedList;
    }

    public function setEnableFullRecordView(bool $enableFullRecordView)
    {
        $this->enableFullRecordView = $enableFullRecordView;
    }
}

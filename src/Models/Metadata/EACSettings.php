<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class EACSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableEACForEveryonePref
 * @property bool|null $enableInboxActivitySharing
 * @property bool|null $enableInsightsInTimeline
 * @property bool|null $enableInsightsInTimelineEacStd
 */
class EACSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEnableEACForEveryonePref(bool $enableEACForEveryonePref)
    {
        $this->enableEACForEveryonePref = $enableEACForEveryonePref;
    }

    public function setEnableInboxActivitySharing(bool $enableInboxActivitySharing)
    {
        $this->enableInboxActivitySharing = $enableInboxActivitySharing;
    }

    public function setEnableInsightsInTimeline(bool $enableInsightsInTimeline)
    {
        $this->enableInsightsInTimeline = $enableInsightsInTimeline;
    }

    public function setEnableInsightsInTimelineEacStd(bool $enableInsightsInTimelineEacStd)
    {
        $this->enableInsightsInTimelineEacStd = $enableInsightsInTimelineEacStd;
    }
}

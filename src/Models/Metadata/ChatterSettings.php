<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ChatterSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $allowChatterGroupArchiving
 * @property bool|null $allowRecordsInChatterGroup
 * @property bool|null $allowSharingInChatterGroup
 * @property bool|null $enableApprovalRequest
 * @property bool|null $enableChatter
 * @property bool|null $enableChatterEmoticons
 * @property bool|null $enableFeedEdit
 * @property bool|null $enableFeedPinning
 * @property bool|null $enableFeedsDraftPosts
 * @property bool|null $enableFeedsRichText
 * @property bool|null $enableInviteCsnUsers
 * @property bool|null $enableOutOfOfficeEnabledPref
 * @property bool|null $enableRichLinkPreviewsInFeed
 * @property bool|null $enableTodayRecsInFeed
 * @property bool|null $unlistedGroupsEnabled
 */
class ChatterSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setAllowChatterGroupArchiving(bool $allowChatterGroupArchiving)
    {
        $this->allowChatterGroupArchiving = $allowChatterGroupArchiving;
    }

    public function setAllowRecordsInChatterGroup(bool $allowRecordsInChatterGroup)
    {
        $this->allowRecordsInChatterGroup = $allowRecordsInChatterGroup;
    }

    public function setAllowSharingInChatterGroup(bool $allowSharingInChatterGroup)
    {
        $this->allowSharingInChatterGroup = $allowSharingInChatterGroup;
    }

    public function setEnableApprovalRequest(bool $enableApprovalRequest)
    {
        $this->enableApprovalRequest = $enableApprovalRequest;
    }

    public function setEnableChatter(bool $enableChatter)
    {
        $this->enableChatter = $enableChatter;
    }

    public function setEnableChatterEmoticons(bool $enableChatterEmoticons)
    {
        $this->enableChatterEmoticons = $enableChatterEmoticons;
    }

    public function setEnableFeedEdit(bool $enableFeedEdit)
    {
        $this->enableFeedEdit = $enableFeedEdit;
    }

    public function setEnableFeedPinning(bool $enableFeedPinning)
    {
        $this->enableFeedPinning = $enableFeedPinning;
    }

    public function setEnableFeedsDraftPosts(bool $enableFeedsDraftPosts)
    {
        $this->enableFeedsDraftPosts = $enableFeedsDraftPosts;
    }

    public function setEnableFeedsRichText(bool $enableFeedsRichText)
    {
        $this->enableFeedsRichText = $enableFeedsRichText;
    }

    public function setEnableInviteCsnUsers(bool $enableInviteCsnUsers)
    {
        $this->enableInviteCsnUsers = $enableInviteCsnUsers;
    }

    public function setEnableOutOfOfficeEnabledPref(bool $enableOutOfOfficeEnabledPref)
    {
        $this->enableOutOfOfficeEnabledPref = $enableOutOfOfficeEnabledPref;
    }

    public function setEnableRichLinkPreviewsInFeed(bool $enableRichLinkPreviewsInFeed)
    {
        $this->enableRichLinkPreviewsInFeed = $enableRichLinkPreviewsInFeed;
    }

    public function setEnableTodayRecsInFeed(bool $enableTodayRecsInFeed)
    {
        $this->enableTodayRecsInFeed = $enableTodayRecsInFeed;
    }

    public function setUnlistedGroupsEnabled(bool $unlistedGroupsEnabled)
    {
        $this->unlistedGroupsEnabled = $unlistedGroupsEnabled;
    }
}

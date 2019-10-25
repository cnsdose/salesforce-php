<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ChatterEmailsMDSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableChatterDigestEmailsApiOnly
 * @property bool|null $enableChatterEmailAttachment
 * @property bool|null $enableCollaborationEmail
 * @property bool|null $enableDisplayAppDownloadBadges
 * @property bool|null $enableEmailReplyToChatter
 * @property bool|null $enableEmailToChatter
 */
class ChatterEmailsMDSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEnableChatterDigestEmailsApiOnly(bool $enableChatterDigestEmailsApiOnly)
    {
        $this->enableChatterDigestEmailsApiOnly = $enableChatterDigestEmailsApiOnly;
    }

    public function setEnableChatterEmailAttachment(bool $enableChatterEmailAttachment)
    {
        $this->enableChatterEmailAttachment = $enableChatterEmailAttachment;
    }

    public function setEnableCollaborationEmail(bool $enableCollaborationEmail)
    {
        $this->enableCollaborationEmail = $enableCollaborationEmail;
    }

    public function setEnableDisplayAppDownloadBadges(bool $enableDisplayAppDownloadBadges)
    {
        $this->enableDisplayAppDownloadBadges = $enableDisplayAppDownloadBadges;
    }

    public function setEnableEmailReplyToChatter(bool $enableEmailReplyToChatter)
    {
        $this->enableEmailReplyToChatter = $enableEmailReplyToChatter;
    }

    public function setEnableEmailToChatter(bool $enableEmailToChatter)
    {
        $this->enableEmailToChatter = $enableEmailToChatter;
    }
}

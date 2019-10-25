<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ContentSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableChatterFileLink
 * @property bool|null $enableContent
 * @property bool|null $enableContentAutoAssign
 * @property bool|null $enableContentDistForPortalUsers
 * @property bool|null $enableContentDistPwOptionsBit1
 * @property bool|null $enableContentDistPwOptionsBit2
 * @property bool|null $enableContentDistribution
 * @property bool|null $enableContentSupportMultiLanguage
 * @property bool|null $enableContentWorkspaceAccess
 * @property bool|null $enableFileShareSetByRecord
 * @property bool|null $enableFilesUsrShareNetRestricted
 * @property bool|null $enableJPGPreviews
 * @property bool|null $enableLibraryManagedFiles
 * @property bool|null $enableSiteGuestUserToUploadFiles
 * @property bool|null $enableUploadFilesOnAttachments
 * @property bool|null $skipContentAssetTriggers
 * @property bool|null $skipContentAssetTriggersOnDeploy
 */
class ContentSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEnableChatterFileLink(bool $enableChatterFileLink)
    {
        $this->enableChatterFileLink = $enableChatterFileLink;
    }

    public function setEnableContent(bool $enableContent)
    {
        $this->enableContent = $enableContent;
    }

    public function setEnableContentAutoAssign(bool $enableContentAutoAssign)
    {
        $this->enableContentAutoAssign = $enableContentAutoAssign;
    }

    public function setEnableContentDistForPortalUsers(bool $enableContentDistForPortalUsers)
    {
        $this->enableContentDistForPortalUsers = $enableContentDistForPortalUsers;
    }

    public function setEnableContentDistPwOptionsBit1(bool $enableContentDistPwOptionsBit1)
    {
        $this->enableContentDistPwOptionsBit1 = $enableContentDistPwOptionsBit1;
    }

    public function setEnableContentDistPwOptionsBit2(bool $enableContentDistPwOptionsBit2)
    {
        $this->enableContentDistPwOptionsBit2 = $enableContentDistPwOptionsBit2;
    }

    public function setEnableContentDistribution(bool $enableContentDistribution)
    {
        $this->enableContentDistribution = $enableContentDistribution;
    }

    public function setEnableContentSupportMultiLanguage(bool $enableContentSupportMultiLanguage)
    {
        $this->enableContentSupportMultiLanguage = $enableContentSupportMultiLanguage;
    }

    public function setEnableContentWorkspaceAccess(bool $enableContentWorkspaceAccess)
    {
        $this->enableContentWorkspaceAccess = $enableContentWorkspaceAccess;
    }

    public function setEnableFileShareSetByRecord(bool $enableFileShareSetByRecord)
    {
        $this->enableFileShareSetByRecord = $enableFileShareSetByRecord;
    }

    public function setEnableFilesUsrShareNetRestricted(bool $enableFilesUsrShareNetRestricted)
    {
        $this->enableFilesUsrShareNetRestricted = $enableFilesUsrShareNetRestricted;
    }

    public function setEnableJPGPreviews(bool $enableJPGPreviews)
    {
        $this->enableJPGPreviews = $enableJPGPreviews;
    }

    public function setEnableLibraryManagedFiles(bool $enableLibraryManagedFiles)
    {
        $this->enableLibraryManagedFiles = $enableLibraryManagedFiles;
    }

    public function setEnableSiteGuestUserToUploadFiles(bool $enableSiteGuestUserToUploadFiles)
    {
        $this->enableSiteGuestUserToUploadFiles = $enableSiteGuestUserToUploadFiles;
    }

    public function setEnableUploadFilesOnAttachments(bool $enableUploadFilesOnAttachments)
    {
        $this->enableUploadFilesOnAttachments = $enableUploadFilesOnAttachments;
    }

    public function setSkipContentAssetTriggers(bool $skipContentAssetTriggers)
    {
        $this->skipContentAssetTriggers = $skipContentAssetTriggers;
    }

    public function setSkipContentAssetTriggersOnDeploy(bool $skipContentAssetTriggersOnDeploy)
    {
        $this->skipContentAssetTriggersOnDeploy = $skipContentAssetTriggersOnDeploy;
    }
}

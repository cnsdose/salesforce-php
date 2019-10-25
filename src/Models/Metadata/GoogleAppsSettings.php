<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class GoogleAppsSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableGmailButtons
 * @property bool|null $enableGmailButtonsAndLinks
 * @property bool|null $enableGmailLinks
 * @property bool|null $enableGoogleDocs
 * @property bool|null $enableGoogleDocsTab
 * @property bool|null $enableGoogleTalk
 * @property string|null $googleAppsDomain
 * @property bool|null $googleAppsDomainLinked
 * @property bool|null $googleAppsDomainValidated
 */
class GoogleAppsSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEnableGmailButtons(bool $enableGmailButtons)
    {
        $this->enableGmailButtons = $enableGmailButtons;
    }

    public function setEnableGmailButtonsAndLinks(bool $enableGmailButtonsAndLinks)
    {
        $this->enableGmailButtonsAndLinks = $enableGmailButtonsAndLinks;
    }

    public function setEnableGmailLinks(bool $enableGmailLinks)
    {
        $this->enableGmailLinks = $enableGmailLinks;
    }

    public function setEnableGoogleDocs(bool $enableGoogleDocs)
    {
        $this->enableGoogleDocs = $enableGoogleDocs;
    }

    public function setEnableGoogleDocsTab(bool $enableGoogleDocsTab)
    {
        $this->enableGoogleDocsTab = $enableGoogleDocsTab;
    }

    public function setEnableGoogleTalk(bool $enableGoogleTalk)
    {
        $this->enableGoogleTalk = $enableGoogleTalk;
    }

    public function setGoogleAppsDomain(string $googleAppsDomain)
    {
        $this->googleAppsDomain = $googleAppsDomain;
    }

    public function setGoogleAppsDomainLinked(bool $googleAppsDomainLinked)
    {
        $this->googleAppsDomainLinked = $googleAppsDomainLinked;
    }

    public function setGoogleAppsDomainValidated(bool $googleAppsDomainValidated)
    {
        $this->googleAppsDomainValidated = $googleAppsDomainValidated;
    }
}

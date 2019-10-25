<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class SocialProfileSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableSocialProfiles
 * @property bool|null $isFacebookSocialProfilesDisabled
 * @property bool|null $isLinkedInSocialProfilesDisabled
 * @property bool|null $isTwitterSocialProfilesDisabled
 * @property bool|null $isYouTubeSocialProfilesDisabled
 */
class SocialProfileSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEnableSocialProfiles(bool $enableSocialProfiles)
    {
        $this->enableSocialProfiles = $enableSocialProfiles;
    }

    public function setIsFacebookSocialProfilesDisabled(bool $isFacebookSocialProfilesDisabled)
    {
        $this->isFacebookSocialProfilesDisabled = $isFacebookSocialProfilesDisabled;
    }

    public function setIsLinkedInSocialProfilesDisabled(bool $isLinkedInSocialProfilesDisabled)
    {
        $this->isLinkedInSocialProfilesDisabled = $isLinkedInSocialProfilesDisabled;
    }

    public function setIsTwitterSocialProfilesDisabled(bool $isTwitterSocialProfilesDisabled)
    {
        $this->isTwitterSocialProfilesDisabled = $isTwitterSocialProfilesDisabled;
    }

    public function setIsYouTubeSocialProfilesDisabled(bool $isYouTubeSocialProfilesDisabled)
    {
        $this->isYouTubeSocialProfilesDisabled = $isYouTubeSocialProfilesDisabled;
    }
}

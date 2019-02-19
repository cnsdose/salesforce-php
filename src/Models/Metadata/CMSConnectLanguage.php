<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CMSConnectLanguage
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $cmsLanguage
 * @property string|null $language
 */
class CMSConnectLanguage
{
    public static $classMap = [
    ];

    public function setCmsLanguage(string $cmsLanguage)
    {
        $this->cmsLanguage = $cmsLanguage;
    }

    public function setLanguage(string $language)
    {
        $this->language = $language;
    }
}

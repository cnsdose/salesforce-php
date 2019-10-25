<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class LanguageSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableCanadaIcuFormat
 * @property bool|null $enableEndUserLanguages
 * @property bool|null $enableICULocaleDateFormat
 * @property bool|null $enablePlatformLanguages
 * @property bool|null $enableTranslationWorkbench
 * @property bool|null $useLanguageFallback
 */
class LanguageSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEnableCanadaIcuFormat(bool $enableCanadaIcuFormat)
    {
        $this->enableCanadaIcuFormat = $enableCanadaIcuFormat;
    }

    public function setEnableEndUserLanguages(bool $enableEndUserLanguages)
    {
        $this->enableEndUserLanguages = $enableEndUserLanguages;
    }

    public function setEnableICULocaleDateFormat(bool $enableICULocaleDateFormat)
    {
        $this->enableICULocaleDateFormat = $enableICULocaleDateFormat;
    }

    public function setEnablePlatformLanguages(bool $enablePlatformLanguages)
    {
        $this->enablePlatformLanguages = $enablePlatformLanguages;
    }

    public function setEnableTranslationWorkbench(bool $enableTranslationWorkbench)
    {
        $this->enableTranslationWorkbench = $enableTranslationWorkbench;
    }

    public function setUseLanguageFallback(bool $useLanguageFallback)
    {
        $this->useLanguageFallback = $useLanguageFallback;
    }
}

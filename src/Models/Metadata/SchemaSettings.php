<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class SchemaSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableAdvancedCMTSecurity
 * @property bool|null $enableAdvancedCSSecurity
 * @property bool|null $enableListCustomSettingCreation
 * @property bool|null $enableSOSLOnCustomSettings
 */
class SchemaSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEnableAdvancedCMTSecurity(bool $enableAdvancedCMTSecurity)
    {
        $this->enableAdvancedCMTSecurity = $enableAdvancedCMTSecurity;
    }

    public function setEnableAdvancedCSSecurity(bool $enableAdvancedCSSecurity)
    {
        $this->enableAdvancedCSSecurity = $enableAdvancedCSSecurity;
    }

    public function setEnableListCustomSettingCreation(bool $enableListCustomSettingCreation)
    {
        $this->enableListCustomSettingCreation = $enableListCustomSettingCreation;
    }

    public function setEnableSOSLOnCustomSettings(bool $enableSOSLOnCustomSettings)
    {
        $this->enableSOSLOnCustomSettings = $enableSOSLOnCustomSettings;
    }
}

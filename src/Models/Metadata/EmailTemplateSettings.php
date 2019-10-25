<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class EmailTemplateSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableLwcEmailTemplateBuilder
 * @property bool|null $enableTemplateEnhancedFolderPref
 */
class EmailTemplateSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEnableLwcEmailTemplateBuilder(bool $enableLwcEmailTemplateBuilder)
    {
        $this->enableLwcEmailTemplateBuilder = $enableLwcEmailTemplateBuilder;
    }

    public function setEnableTemplateEnhancedFolderPref(bool $enableTemplateEnhancedFolderPref)
    {
        $this->enableTemplateEnhancedFolderPref = $enableTemplateEnhancedFolderPref;
    }
}

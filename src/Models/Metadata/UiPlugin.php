<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class UiPlugin
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $description
 * @property string|null $extensionPointIdentifier
 * @property bool|null $isEnabled
 * @property string|null $language
 * @property string|null $masterLabel
 */
class UiPlugin extends MetadataWithContent
{
    public static $classMap = [
    ];

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setExtensionPointIdentifier(string $extensionPointIdentifier)
    {
        $this->extensionPointIdentifier = $extensionPointIdentifier;
    }

    public function setIsEnabled(bool $isEnabled)
    {
        $this->isEnabled = $isEnabled;
    }

    public function setLanguage(string $language)
    {
        $this->language = $language;
    }

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }
}

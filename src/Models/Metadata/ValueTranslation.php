<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ValueTranslation
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $masterLabel
 * @property string|null $translation
 */
class ValueTranslation
{
    public static $classMap = [
    ];

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }

    public function setTranslation(string $translation)
    {
        $this->translation = $translation;
    }
}

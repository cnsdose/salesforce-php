<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class PicklistValueTranslation
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $masterLabel
 * @property string|null $translation
 */
class PicklistValueTranslation
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

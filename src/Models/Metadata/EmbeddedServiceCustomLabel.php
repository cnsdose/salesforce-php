<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class EmbeddedServiceCustomLabel
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $customLabel
 * @property string|null $feature
 * @property string|null $labelKey
 */
class EmbeddedServiceCustomLabel
{
    public static $classMap = [
    ];

    public function setCustomLabel(string $customLabel)
    {
        $this->customLabel = $customLabel;
    }

    public function setFeature(EmbeddedServiceFeature $feature)
    {
        $this->feature = $feature->getValue();
    }

    public function setLabelKey(EmbeddedServiceLabelKey $labelKey)
    {
        $this->labelKey = $labelKey->getValue();
    }
}

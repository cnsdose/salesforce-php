<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ReputationLevel
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property ReputationBranding|null $branding
 * @property string|null $label
 * @property float|null $lowerThreshold
 */
class ReputationLevel
{
    public static $classMap = [
        'branding' => [
            'multiple' => false,
            'type' => ReputationBranding::class,
        ],
    ];

    public function setBranding(ReputationBranding $branding)
    {
        $this->branding = $branding;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setLowerThreshold(float $lowerThreshold)
    {
        $this->lowerThreshold = $lowerThreshold;
    }
}

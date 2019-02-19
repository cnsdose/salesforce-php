<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CustomLabels
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property CustomLabel[]|null $labels
 */
class CustomLabels extends Metadata
{
    public static $classMap = [
        'labels' => [
            'multiple' => true,
            'type' => CustomLabel::class,
        ],
    ];

    public function setLabels(array $labels)
    {
        $this->labels = $labels;
    }
}

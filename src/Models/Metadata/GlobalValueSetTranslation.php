<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class GlobalValueSetTranslation
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property ValueTranslation[]|null $valueTranslation
 */
class GlobalValueSetTranslation extends Metadata
{
    public static $classMap = [
        'valueTranslation' => [
            'multiple' => true,
            'type' => ValueTranslation::class,
        ],
    ];

    public function setValueTranslation(array $valueTranslation)
    {
        $this->valueTranslation = $valueTranslation;
    }
}

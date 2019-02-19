<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class StandardValueSetTranslation
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property ValueTranslation[]|null $valueTranslation
 */
class StandardValueSetTranslation extends Metadata
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

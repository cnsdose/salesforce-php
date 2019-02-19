<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class EmbeddedServiceLayout
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property EmbeddedServiceLayoutRule[]|null $embeddedServiceLayoutRules
 * @property string|null $layout
 * @property string|null $layoutType
 */
class EmbeddedServiceLayout
{
    public static $classMap = [
        'embeddedServiceLayoutRules' => [
            'multiple' => true,
            'type' => EmbeddedServiceLayoutRule::class,
        ],
    ];

    public function setEmbeddedServiceLayoutRules(array $embeddedServiceLayoutRules)
    {
        $this->embeddedServiceLayoutRules = $embeddedServiceLayoutRules;
    }

    public function setLayout(string $layout)
    {
        $this->layout = $layout;
    }

    public function setLayoutType(EmbeddedServiceLayoutType $layoutType)
    {
        $this->layoutType = $layoutType->getValue();
    }
}

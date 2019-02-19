<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class EmbeddedServiceConfig
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $areGuestUsersAllowed
 * @property string|null $authMethod
 * @property string|null $customMinimizedComponent
 * @property EmbeddedServiceCustomComponent[]|null $embeddedServiceCustomComponents
 * @property EmbeddedServiceCustomLabel[]|null $embeddedServiceCustomLabels
 * @property EmbeddedServiceFlowConfig|null $embeddedServiceFlowConfig
 * @property EmbeddedServiceFlow[]|null $embeddedServiceFlows
 * @property EmbeddedServiceLayout[]|null $embeddedServiceLayouts
 * @property string|null $masterLabel
 * @property bool|null $shouldHideAuthDialog
 * @property string|null $site
 */
class EmbeddedServiceConfig extends Metadata
{
    public static $classMap = [
        'embeddedServiceCustomComponents' => [
            'multiple' => true,
            'type' => EmbeddedServiceCustomComponent::class,
        ],
        'embeddedServiceCustomLabels' => [
            'multiple' => true,
            'type' => EmbeddedServiceCustomLabel::class,
        ],
        'embeddedServiceFlowConfig' => [
            'multiple' => false,
            'type' => EmbeddedServiceFlowConfig::class,
        ],
        'embeddedServiceFlows' => [
            'multiple' => true,
            'type' => EmbeddedServiceFlow::class,
        ],
        'embeddedServiceLayouts' => [
            'multiple' => true,
            'type' => EmbeddedServiceLayout::class,
        ],
    ];

    public function setAreGuestUsersAllowed(bool $areGuestUsersAllowed)
    {
        $this->areGuestUsersAllowed = $areGuestUsersAllowed;
    }

    public function setAuthMethod(EmbeddedServiceAuthMethod $authMethod)
    {
        $this->authMethod = $authMethod->getValue();
    }

    public function setCustomMinimizedComponent(string $customMinimizedComponent)
    {
        $this->customMinimizedComponent = $customMinimizedComponent;
    }

    public function setEmbeddedServiceCustomComponents(array $embeddedServiceCustomComponents)
    {
        $this->embeddedServiceCustomComponents = $embeddedServiceCustomComponents;
    }

    public function setEmbeddedServiceCustomLabels(array $embeddedServiceCustomLabels)
    {
        $this->embeddedServiceCustomLabels = $embeddedServiceCustomLabels;
    }

    public function setEmbeddedServiceFlowConfig(EmbeddedServiceFlowConfig $embeddedServiceFlowConfig)
    {
        $this->embeddedServiceFlowConfig = $embeddedServiceFlowConfig;
    }

    public function setEmbeddedServiceFlows(array $embeddedServiceFlows)
    {
        $this->embeddedServiceFlows = $embeddedServiceFlows;
    }

    public function setEmbeddedServiceLayouts(array $embeddedServiceLayouts)
    {
        $this->embeddedServiceLayouts = $embeddedServiceLayouts;
    }

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }

    public function setShouldHideAuthDialog(bool $shouldHideAuthDialog)
    {
        $this->shouldHideAuthDialog = $shouldHideAuthDialog;
    }

    public function setSite(string $site)
    {
        $this->site = $site;
    }
}

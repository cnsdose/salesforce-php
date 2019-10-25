<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class RecordActionDeployment
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property RecordActionDeploymentChannel[]|null $channelConfigurations
 * @property RecordActionDeploymentContext[]|null $deploymentContexts
 * @property bool|null $hasGuidedActions
 * @property bool|null $hasRecommendations
 * @property string|null $masterLabel
 * @property RecordActionRecommendation|null $recommendation
 * @property RecordActionSelectableItem[]|null $selectableItems
 */
class RecordActionDeployment extends Metadata
{
    public static $classMap = [
        'channelConfigurations' => [
            'multiple' => true,
            'type' => RecordActionDeploymentChannel::class,
        ],
        'deploymentContexts' => [
            'multiple' => true,
            'type' => RecordActionDeploymentContext::class,
        ],
        'recommendation' => [
            'multiple' => false,
            'type' => RecordActionRecommendation::class,
        ],
        'selectableItems' => [
            'multiple' => true,
            'type' => RecordActionSelectableItem::class,
        ],
    ];

    public function setChannelConfigurations(array $channelConfigurations)
    {
        $this->channelConfigurations = $channelConfigurations;
    }

    public function setDeploymentContexts(array $deploymentContexts)
    {
        $this->deploymentContexts = $deploymentContexts;
    }

    public function setHasGuidedActions(bool $hasGuidedActions)
    {
        $this->hasGuidedActions = $hasGuidedActions;
    }

    public function setHasRecommendations(bool $hasRecommendations)
    {
        $this->hasRecommendations = $hasRecommendations;
    }

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }

    public function setRecommendation(RecordActionRecommendation $recommendation)
    {
        $this->recommendation = $recommendation;
    }

    public function setSelectableItems(array $selectableItems)
    {
        $this->selectableItems = $selectableItems;
    }
}

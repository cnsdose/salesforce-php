<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ContentAssetRelationships
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property ContentAssetLink[]|null $insightsApplication
 * @property ContentAssetLink[]|null $network
 * @property ContentAssetLink|null $organization
 * @property ContentAssetLink[]|null $workspace
 */
class ContentAssetRelationships
{
    public static $classMap = [
        'insightsApplication' => [
            'multiple' => true,
            'type' => ContentAssetLink::class,
        ],
        'network' => [
            'multiple' => true,
            'type' => ContentAssetLink::class,
        ],
        'organization' => [
            'multiple' => false,
            'type' => ContentAssetLink::class,
        ],
        'workspace' => [
            'multiple' => true,
            'type' => ContentAssetLink::class,
        ],
    ];

    public function setInsightsApplication(array $insightsApplication)
    {
        $this->insightsApplication = $insightsApplication;
    }

    public function setNetwork(array $network)
    {
        $this->network = $network;
    }

    public function setOrganization(ContentAssetLink $organization)
    {
        $this->organization = $organization;
    }

    public function setWorkspace(array $workspace)
    {
        $this->workspace = $workspace;
    }
}

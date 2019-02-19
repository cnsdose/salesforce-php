<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class KnowledgeCommunitiesSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string[]|null $community
 */
class KnowledgeCommunitiesSettings
{
    public static $classMap = [
    ];

    public function setCommunity(array $community)
    {
        $this->community = $community;
    }
}

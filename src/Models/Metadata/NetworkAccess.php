<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class NetworkAccess
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property IpRange[]|null $ipRanges
 */
class NetworkAccess
{
    public static $classMap = [
        'ipRanges' => [
            'multiple' => true,
            'type' => IpRange::class,
        ],
    ];

    public function setIpRanges(array $ipRanges)
    {
        $this->ipRanges = $ipRanges;
    }
}

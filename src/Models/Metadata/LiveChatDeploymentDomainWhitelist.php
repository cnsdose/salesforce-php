<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class LiveChatDeploymentDomainWhitelist
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string[]|null $domain
 */
class LiveChatDeploymentDomainWhitelist
{
    public static $classMap = [
    ];

    public function setDomain(array $domain)
    {
        $this->domain = $domain;
    }
}

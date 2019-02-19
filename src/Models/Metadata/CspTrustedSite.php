<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CspTrustedSite
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $context
 * @property string|null $description
 * @property string|null $endpointUrl
 * @property bool|null $isActive
 */
class CspTrustedSite extends Metadata
{
    public static $classMap = [
    ];

    public function setContext(CspTrustedSiteContext $context)
    {
        $this->context = $context->getValue();
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setEndpointUrl(string $endpointUrl)
    {
        $this->endpointUrl = $endpointUrl;
    }

    public function setIsActive(bool $isActive)
    {
        $this->isActive = $isActive;
    }
}

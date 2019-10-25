<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ExternalServicesSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableEnhancedExternalServices
 */
class ExternalServicesSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEnableEnhancedExternalServices(bool $enableEnhancedExternalServices)
    {
        $this->enableEnhancedExternalServices = $enableEnhancedExternalServices;
    }
}

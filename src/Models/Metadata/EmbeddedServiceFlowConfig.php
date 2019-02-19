<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class EmbeddedServiceFlowConfig
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enabled
 */
class EmbeddedServiceFlowConfig extends Metadata
{
    public static $classMap = [
    ];

    public function setEnabled(bool $enabled)
    {
        $this->enabled = $enabled;
    }
}

<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class OrderManagementSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableOrderManagement
 */
class OrderManagementSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEnableOrderManagement(bool $enableOrderManagement)
    {
        $this->enableOrderManagement = $enableOrderManagement;
    }
}

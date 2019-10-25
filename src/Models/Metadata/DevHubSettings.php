<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class DevHubSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableShapeExportPref
 */
class DevHubSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEnableShapeExportPref(bool $enableShapeExportPref)
    {
        $this->enableShapeExportPref = $enableShapeExportPref;
    }
}

<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class IndustriesManufacturingSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableIndManufacturing
 * @property bool|null $enableIndustriesMfgAccountForecast
 */
class IndustriesManufacturingSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEnableIndManufacturing(bool $enableIndManufacturing)
    {
        $this->enableIndManufacturing = $enableIndManufacturing;
    }

    public function setEnableIndustriesMfgAccountForecast(bool $enableIndustriesMfgAccountForecast)
    {
        $this->enableIndustriesMfgAccountForecast = $enableIndustriesMfgAccountForecast;
    }
}

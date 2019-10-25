<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class MapsAndLocationSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableAddressAutoComplete
 * @property bool|null $enableMapsAndLocation
 */
class MapsAndLocationSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEnableAddressAutoComplete(bool $enableAddressAutoComplete)
    {
        $this->enableAddressAutoComplete = $enableAddressAutoComplete;
    }

    public function setEnableMapsAndLocation(bool $enableMapsAndLocation)
    {
        $this->enableMapsAndLocation = $enableMapsAndLocation;
    }
}

<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class PartyDataModelSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableAutoSelectIndividualOnMerge
 * @property bool|null $enableConsentManagement
 */
class PartyDataModelSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEnableAutoSelectIndividualOnMerge(bool $enableAutoSelectIndividualOnMerge)
    {
        $this->enableAutoSelectIndividualOnMerge = $enableAutoSelectIndividualOnMerge;
    }

    public function setEnableConsentManagement(bool $enableConsentManagement)
    {
        $this->enableConsentManagement = $enableConsentManagement;
    }
}

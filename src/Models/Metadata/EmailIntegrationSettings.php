<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class EmailIntegrationSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $doesEmailLogAsEmailMessageInOutlook
 * @property bool|null $doesGmailStayConnectedToSalesforce
 * @property bool|null $enableContactAndEventSync
 * @property bool|null $enableEmailTrackingInMobile
 * @property bool|null $enableEngageForOutlook
 * @property bool|null $enableGmailIntegration
 * @property bool|null $enableOutlookIntegration
 * @property bool|null $enableProductivityFeatures
 * @property bool|null $enableSupplementalContactInfoInMobile
 * @property bool|null $isLayoutCustomizationAllowed
 * @property bool|null $shouldUseTrustedDomainsList
 */
class EmailIntegrationSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setDoesEmailLogAsEmailMessageInOutlook(bool $doesEmailLogAsEmailMessageInOutlook)
    {
        $this->doesEmailLogAsEmailMessageInOutlook = $doesEmailLogAsEmailMessageInOutlook;
    }

    public function setDoesGmailStayConnectedToSalesforce(bool $doesGmailStayConnectedToSalesforce)
    {
        $this->doesGmailStayConnectedToSalesforce = $doesGmailStayConnectedToSalesforce;
    }

    public function setEnableContactAndEventSync(bool $enableContactAndEventSync)
    {
        $this->enableContactAndEventSync = $enableContactAndEventSync;
    }

    public function setEnableEmailTrackingInMobile(bool $enableEmailTrackingInMobile)
    {
        $this->enableEmailTrackingInMobile = $enableEmailTrackingInMobile;
    }

    public function setEnableEngageForOutlook(bool $enableEngageForOutlook)
    {
        $this->enableEngageForOutlook = $enableEngageForOutlook;
    }

    public function setEnableGmailIntegration(bool $enableGmailIntegration)
    {
        $this->enableGmailIntegration = $enableGmailIntegration;
    }

    public function setEnableOutlookIntegration(bool $enableOutlookIntegration)
    {
        $this->enableOutlookIntegration = $enableOutlookIntegration;
    }

    public function setEnableProductivityFeatures(bool $enableProductivityFeatures)
    {
        $this->enableProductivityFeatures = $enableProductivityFeatures;
    }

    public function setEnableSupplementalContactInfoInMobile(bool $enableSupplementalContactInfoInMobile)
    {
        $this->enableSupplementalContactInfoInMobile = $enableSupplementalContactInfoInMobile;
    }

    public function setIsLayoutCustomizationAllowed(bool $isLayoutCustomizationAllowed)
    {
        $this->isLayoutCustomizationAllowed = $isLayoutCustomizationAllowed;
    }

    public function setShouldUseTrustedDomainsList(bool $shouldUseTrustedDomainsList)
    {
        $this->shouldUseTrustedDomainsList = $shouldUseTrustedDomainsList;
    }
}

<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class PrivacySettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableConsentAuditTrail
 * @property bool|null $enableConsentEventStream
 * @property bool|null $enableDefaultMetadataValues
 */
class PrivacySettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEnableConsentAuditTrail(bool $enableConsentAuditTrail)
    {
        $this->enableConsentAuditTrail = $enableConsentAuditTrail;
    }

    public function setEnableConsentEventStream(bool $enableConsentEventStream)
    {
        $this->enableConsentEventStream = $enableConsentEventStream;
    }

    public function setEnableDefaultMetadataValues(bool $enableDefaultMetadataValues)
    {
        $this->enableDefaultMetadataValues = $enableDefaultMetadataValues;
    }
}

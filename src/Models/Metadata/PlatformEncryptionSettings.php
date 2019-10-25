<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class PlatformEncryptionSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $canEncryptManagedPackageFields
 * @property bool|null $enableDeterministicEncryption
 * @property bool|null $enableEncryptFieldHistory
 * @property bool|null $enableEventBusEncryption
 * @property bool|null $isMEKForEncryptionRequired
 * @property bool|null $isUseHighAssuranceKeysRequired
 */
class PlatformEncryptionSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setCanEncryptManagedPackageFields(bool $canEncryptManagedPackageFields)
    {
        $this->canEncryptManagedPackageFields = $canEncryptManagedPackageFields;
    }

    public function setEnableDeterministicEncryption(bool $enableDeterministicEncryption)
    {
        $this->enableDeterministicEncryption = $enableDeterministicEncryption;
    }

    public function setEnableEncryptFieldHistory(bool $enableEncryptFieldHistory)
    {
        $this->enableEncryptFieldHistory = $enableEncryptFieldHistory;
    }

    public function setEnableEventBusEncryption(bool $enableEventBusEncryption)
    {
        $this->enableEventBusEncryption = $enableEventBusEncryption;
    }

    public function setIsMEKForEncryptionRequired(bool $isMEKForEncryptionRequired)
    {
        $this->isMEKForEncryptionRequired = $isMEKForEncryptionRequired;
    }

    public function setIsUseHighAssuranceKeysRequired(bool $isUseHighAssuranceKeysRequired)
    {
        $this->isUseHighAssuranceKeysRequired = $isUseHighAssuranceKeysRequired;
    }
}

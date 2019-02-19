<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class EntitlementSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $assetLookupLimitedToActiveEntitlementsOnAccount
 * @property bool|null $assetLookupLimitedToActiveEntitlementsOnContact
 * @property bool|null $assetLookupLimitedToSameAccount
 * @property bool|null $assetLookupLimitedToSameContact
 * @property bool|null $enableEntitlementVersioning
 * @property bool|null $enableEntitlements
 * @property bool|null $entitlementLookupLimitedToActiveStatus
 * @property bool|null $entitlementLookupLimitedToSameAccount
 * @property bool|null $entitlementLookupLimitedToSameAsset
 * @property bool|null $entitlementLookupLimitedToSameContact
 */
class EntitlementSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setAssetLookupLimitedToActiveEntitlementsOnAccount(bool $assetLookupLimitedToActiveEntitlementsOnAccount)
    {
        $this->assetLookupLimitedToActiveEntitlementsOnAccount = $assetLookupLimitedToActiveEntitlementsOnAccount;
    }

    public function setAssetLookupLimitedToActiveEntitlementsOnContact(bool $assetLookupLimitedToActiveEntitlementsOnContact)
    {
        $this->assetLookupLimitedToActiveEntitlementsOnContact = $assetLookupLimitedToActiveEntitlementsOnContact;
    }

    public function setAssetLookupLimitedToSameAccount(bool $assetLookupLimitedToSameAccount)
    {
        $this->assetLookupLimitedToSameAccount = $assetLookupLimitedToSameAccount;
    }

    public function setAssetLookupLimitedToSameContact(bool $assetLookupLimitedToSameContact)
    {
        $this->assetLookupLimitedToSameContact = $assetLookupLimitedToSameContact;
    }

    public function setEnableEntitlementVersioning(bool $enableEntitlementVersioning)
    {
        $this->enableEntitlementVersioning = $enableEntitlementVersioning;
    }

    public function setEnableEntitlements(bool $enableEntitlements)
    {
        $this->enableEntitlements = $enableEntitlements;
    }

    public function setEntitlementLookupLimitedToActiveStatus(bool $entitlementLookupLimitedToActiveStatus)
    {
        $this->entitlementLookupLimitedToActiveStatus = $entitlementLookupLimitedToActiveStatus;
    }

    public function setEntitlementLookupLimitedToSameAccount(bool $entitlementLookupLimitedToSameAccount)
    {
        $this->entitlementLookupLimitedToSameAccount = $entitlementLookupLimitedToSameAccount;
    }

    public function setEntitlementLookupLimitedToSameAsset(bool $entitlementLookupLimitedToSameAsset)
    {
        $this->entitlementLookupLimitedToSameAsset = $entitlementLookupLimitedToSameAsset;
    }

    public function setEntitlementLookupLimitedToSameContact(bool $entitlementLookupLimitedToSameContact)
    {
        $this->entitlementLookupLimitedToSameContact = $entitlementLookupLimitedToSameContact;
    }
}

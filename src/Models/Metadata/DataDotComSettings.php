<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class DataDotComSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableAccountExportButtonOff
 * @property bool|null $enableAccountImportButtonOff
 * @property bool|null $enableAllowDupeContactFromLead
 * @property bool|null $enableAllowDupeLeadFromContact
 * @property bool|null $enableCleanUpgradeRequested
 * @property bool|null $enableContactExportButtonOff
 * @property bool|null $enableContactImportButtonOff
 */
class DataDotComSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEnableAccountExportButtonOff(bool $enableAccountExportButtonOff)
    {
        $this->enableAccountExportButtonOff = $enableAccountExportButtonOff;
    }

    public function setEnableAccountImportButtonOff(bool $enableAccountImportButtonOff)
    {
        $this->enableAccountImportButtonOff = $enableAccountImportButtonOff;
    }

    public function setEnableAllowDupeContactFromLead(bool $enableAllowDupeContactFromLead)
    {
        $this->enableAllowDupeContactFromLead = $enableAllowDupeContactFromLead;
    }

    public function setEnableAllowDupeLeadFromContact(bool $enableAllowDupeLeadFromContact)
    {
        $this->enableAllowDupeLeadFromContact = $enableAllowDupeLeadFromContact;
    }

    public function setEnableCleanUpgradeRequested(bool $enableCleanUpgradeRequested)
    {
        $this->enableCleanUpgradeRequested = $enableCleanUpgradeRequested;
    }

    public function setEnableContactExportButtonOff(bool $enableContactExportButtonOff)
    {
        $this->enableContactExportButtonOff = $enableContactExportButtonOff;
    }

    public function setEnableContactImportButtonOff(bool $enableContactImportButtonOff)
    {
        $this->enableContactImportButtonOff = $enableContactImportButtonOff;
    }
}

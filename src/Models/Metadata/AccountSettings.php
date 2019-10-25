<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class AccountSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableAccountHistoryTracking
 * @property bool|null $enableAccountInsightsInMobile
 * @property bool|null $enableAccountOwnerReport
 * @property bool|null $enableAccountTeams
 * @property bool|null $enableContactHistoryTracking
 * @property bool|null $enableRelateContactToMultipleAccounts
 * @property bool|null $showViewHierarchyLink
 */
class AccountSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEnableAccountHistoryTracking(bool $enableAccountHistoryTracking)
    {
        $this->enableAccountHistoryTracking = $enableAccountHistoryTracking;
    }

    public function setEnableAccountInsightsInMobile(bool $enableAccountInsightsInMobile)
    {
        $this->enableAccountInsightsInMobile = $enableAccountInsightsInMobile;
    }

    public function setEnableAccountOwnerReport(bool $enableAccountOwnerReport)
    {
        $this->enableAccountOwnerReport = $enableAccountOwnerReport;
    }

    public function setEnableAccountTeams(bool $enableAccountTeams)
    {
        $this->enableAccountTeams = $enableAccountTeams;
    }

    public function setEnableContactHistoryTracking(bool $enableContactHistoryTracking)
    {
        $this->enableContactHistoryTracking = $enableContactHistoryTracking;
    }

    public function setEnableRelateContactToMultipleAccounts(bool $enableRelateContactToMultipleAccounts)
    {
        $this->enableRelateContactToMultipleAccounts = $enableRelateContactToMultipleAccounts;
    }

    public function setShowViewHierarchyLink(bool $showViewHierarchyLink)
    {
        $this->showViewHierarchyLink = $showViewHierarchyLink;
    }
}

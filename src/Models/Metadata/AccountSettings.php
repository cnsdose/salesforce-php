<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class AccountSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableAccountOwnerReport
 * @property bool|null $enableAccountTeams
 * @property bool|null $showViewHierarchyLink
 */
class AccountSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEnableAccountOwnerReport(bool $enableAccountOwnerReport)
    {
        $this->enableAccountOwnerReport = $enableAccountOwnerReport;
    }

    public function setEnableAccountTeams(bool $enableAccountTeams)
    {
        $this->enableAccountTeams = $enableAccountTeams;
    }

    public function setShowViewHierarchyLink(bool $showViewHierarchyLink)
    {
        $this->showViewHierarchyLink = $showViewHierarchyLink;
    }
}

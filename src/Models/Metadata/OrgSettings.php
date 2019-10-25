<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class OrgSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableCustomerSuccessPortal
 * @property bool|null $enableExtendedMailMerge
 * @property bool|null $enableIncludeContractStatus
 * @property bool|null $enableMakeDeploymentsMandatory
 * @property bool|null $enableManageSelfServiceUsers
 * @property bool|null $enableOrgFeedSentimentAnalysis
 * @property bool|null $enableRADeploymentAttributeOnly
 * @property bool|null $enableResetDivisionOnLogin
 * @property bool|null $saveMailMergeDocsAsSalesforceDocs
 */
class OrgSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEnableCustomerSuccessPortal(bool $enableCustomerSuccessPortal)
    {
        $this->enableCustomerSuccessPortal = $enableCustomerSuccessPortal;
    }

    public function setEnableExtendedMailMerge(bool $enableExtendedMailMerge)
    {
        $this->enableExtendedMailMerge = $enableExtendedMailMerge;
    }

    public function setEnableIncludeContractStatus(bool $enableIncludeContractStatus)
    {
        $this->enableIncludeContractStatus = $enableIncludeContractStatus;
    }

    public function setEnableMakeDeploymentsMandatory(bool $enableMakeDeploymentsMandatory)
    {
        $this->enableMakeDeploymentsMandatory = $enableMakeDeploymentsMandatory;
    }

    public function setEnableManageSelfServiceUsers(bool $enableManageSelfServiceUsers)
    {
        $this->enableManageSelfServiceUsers = $enableManageSelfServiceUsers;
    }

    public function setEnableOrgFeedSentimentAnalysis(bool $enableOrgFeedSentimentAnalysis)
    {
        $this->enableOrgFeedSentimentAnalysis = $enableOrgFeedSentimentAnalysis;
    }

    public function setEnableRADeploymentAttributeOnly(bool $enableRADeploymentAttributeOnly)
    {
        $this->enableRADeploymentAttributeOnly = $enableRADeploymentAttributeOnly;
    }

    public function setEnableResetDivisionOnLogin(bool $enableResetDivisionOnLogin)
    {
        $this->enableResetDivisionOnLogin = $enableResetDivisionOnLogin;
    }

    public function setSaveMailMergeDocsAsSalesforceDocs(bool $saveMailMergeDocsAsSalesforceDocs)
    {
        $this->saveMailMergeDocsAsSalesforceDocs = $saveMailMergeDocsAsSalesforceDocs;
    }
}

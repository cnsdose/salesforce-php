<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FlowSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableFlowBREncodedFixEnabled
 * @property bool|null $enableFlowDeployAsActiveEnabled
 * @property bool|null $enableFlowFieldFilterEnabled
 * @property bool|null $enableFlowFormulasFixEnabled
 * @property bool|null $enableFlowInterviewSharingEnabled
 * @property bool|null $enableFlowNullPreviousValueFix
 * @property bool|null $enableFlowPauseEnabled
 * @property bool|null $enableFlowUseApexExceptionEmail
 * @property bool|null $enableInvocableFlowFixEnabled
 * @property bool|null $enableLightningRuntimeEnabled
 * @property bool|null $enableUseFlowBuilder
 * @property bool|null $isAccessToInvokedApexRequired
 * @property bool|null $isEnhancedFlowListViewVisible
 * @property bool|null $isManageFlowRequiredForAutomationCharts
 */
class FlowSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEnableFlowBREncodedFixEnabled(bool $enableFlowBREncodedFixEnabled)
    {
        $this->enableFlowBREncodedFixEnabled = $enableFlowBREncodedFixEnabled;
    }

    public function setEnableFlowDeployAsActiveEnabled(bool $enableFlowDeployAsActiveEnabled)
    {
        $this->enableFlowDeployAsActiveEnabled = $enableFlowDeployAsActiveEnabled;
    }

    public function setEnableFlowFieldFilterEnabled(bool $enableFlowFieldFilterEnabled)
    {
        $this->enableFlowFieldFilterEnabled = $enableFlowFieldFilterEnabled;
    }

    public function setEnableFlowFormulasFixEnabled(bool $enableFlowFormulasFixEnabled)
    {
        $this->enableFlowFormulasFixEnabled = $enableFlowFormulasFixEnabled;
    }

    public function setEnableFlowInterviewSharingEnabled(bool $enableFlowInterviewSharingEnabled)
    {
        $this->enableFlowInterviewSharingEnabled = $enableFlowInterviewSharingEnabled;
    }

    public function setEnableFlowNullPreviousValueFix(bool $enableFlowNullPreviousValueFix)
    {
        $this->enableFlowNullPreviousValueFix = $enableFlowNullPreviousValueFix;
    }

    public function setEnableFlowPauseEnabled(bool $enableFlowPauseEnabled)
    {
        $this->enableFlowPauseEnabled = $enableFlowPauseEnabled;
    }

    public function setEnableFlowUseApexExceptionEmail(bool $enableFlowUseApexExceptionEmail)
    {
        $this->enableFlowUseApexExceptionEmail = $enableFlowUseApexExceptionEmail;
    }

    public function setEnableInvocableFlowFixEnabled(bool $enableInvocableFlowFixEnabled)
    {
        $this->enableInvocableFlowFixEnabled = $enableInvocableFlowFixEnabled;
    }

    public function setEnableLightningRuntimeEnabled(bool $enableLightningRuntimeEnabled)
    {
        $this->enableLightningRuntimeEnabled = $enableLightningRuntimeEnabled;
    }

    public function setEnableUseFlowBuilder(bool $enableUseFlowBuilder)
    {
        $this->enableUseFlowBuilder = $enableUseFlowBuilder;
    }

    public function setIsAccessToInvokedApexRequired(bool $isAccessToInvokedApexRequired)
    {
        $this->isAccessToInvokedApexRequired = $isAccessToInvokedApexRequired;
    }

    public function setIsEnhancedFlowListViewVisible(bool $isEnhancedFlowListViewVisible)
    {
        $this->isEnhancedFlowListViewVisible = $isEnhancedFlowListViewVisible;
    }

    public function setIsManageFlowRequiredForAutomationCharts(bool $isManageFlowRequiredForAutomationCharts)
    {
        $this->isManageFlowRequiredForAutomationCharts = $isManageFlowRequiredForAutomationCharts;
    }
}

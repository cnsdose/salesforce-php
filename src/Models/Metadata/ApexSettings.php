<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ApexSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableAggregateCodeCoverageOnly
 * @property bool|null $enableApexAccessRightsPref
 * @property bool|null $enableApexApprovalLockUnlock
 * @property bool|null $enableApexCtrlImplicitWithSharingPref
 * @property bool|null $enableApexPropertyGetterPref
 * @property bool|null $enableAuraApexCtrlAuthUserAccessCheckPref
 * @property bool|null $enableAuraApexCtrlGuestUserAccessCheckPref
 * @property bool|null $enableCompileOnDeploy
 * @property bool|null $enableDisableParallelApexTesting
 * @property bool|null $enableDoNotEmailDebugLog
 * @property bool|null $enableGaplessTestAutoNum
 * @property bool|null $enableMngdCtrlActionAccessPref
 * @property bool|null $enableNonCertifiedApexMdCrud
 */
class ApexSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEnableAggregateCodeCoverageOnly(bool $enableAggregateCodeCoverageOnly)
    {
        $this->enableAggregateCodeCoverageOnly = $enableAggregateCodeCoverageOnly;
    }

    public function setEnableApexAccessRightsPref(bool $enableApexAccessRightsPref)
    {
        $this->enableApexAccessRightsPref = $enableApexAccessRightsPref;
    }

    public function setEnableApexApprovalLockUnlock(bool $enableApexApprovalLockUnlock)
    {
        $this->enableApexApprovalLockUnlock = $enableApexApprovalLockUnlock;
    }

    public function setEnableApexCtrlImplicitWithSharingPref(bool $enableApexCtrlImplicitWithSharingPref)
    {
        $this->enableApexCtrlImplicitWithSharingPref = $enableApexCtrlImplicitWithSharingPref;
    }

    public function setEnableApexPropertyGetterPref(bool $enableApexPropertyGetterPref)
    {
        $this->enableApexPropertyGetterPref = $enableApexPropertyGetterPref;
    }

    public function setEnableAuraApexCtrlAuthUserAccessCheckPref(bool $enableAuraApexCtrlAuthUserAccessCheckPref)
    {
        $this->enableAuraApexCtrlAuthUserAccessCheckPref = $enableAuraApexCtrlAuthUserAccessCheckPref;
    }

    public function setEnableAuraApexCtrlGuestUserAccessCheckPref(bool $enableAuraApexCtrlGuestUserAccessCheckPref)
    {
        $this->enableAuraApexCtrlGuestUserAccessCheckPref = $enableAuraApexCtrlGuestUserAccessCheckPref;
    }

    public function setEnableCompileOnDeploy(bool $enableCompileOnDeploy)
    {
        $this->enableCompileOnDeploy = $enableCompileOnDeploy;
    }

    public function setEnableDisableParallelApexTesting(bool $enableDisableParallelApexTesting)
    {
        $this->enableDisableParallelApexTesting = $enableDisableParallelApexTesting;
    }

    public function setEnableDoNotEmailDebugLog(bool $enableDoNotEmailDebugLog)
    {
        $this->enableDoNotEmailDebugLog = $enableDoNotEmailDebugLog;
    }

    public function setEnableGaplessTestAutoNum(bool $enableGaplessTestAutoNum)
    {
        $this->enableGaplessTestAutoNum = $enableGaplessTestAutoNum;
    }

    public function setEnableMngdCtrlActionAccessPref(bool $enableMngdCtrlActionAccessPref)
    {
        $this->enableMngdCtrlActionAccessPref = $enableMngdCtrlActionAccessPref;
    }

    public function setEnableNonCertifiedApexMdCrud(bool $enableNonCertifiedApexMdCrud)
    {
        $this->enableNonCertifiedApexMdCrud = $enableNonCertifiedApexMdCrud;
    }
}

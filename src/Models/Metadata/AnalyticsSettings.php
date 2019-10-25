<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class AnalyticsSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $alwaysGenPreviews
 * @property bool|null $analyticsAdoptionMetadata
 * @property bool|null $canAccessAnalyticsViaAPI
 * @property bool|null $canAnnotateDashboards
 * @property bool|null $canEnableSavedView
 * @property bool|null $canExploreDataConversationally
 * @property bool|null $canShareAppsWithCommunities
 * @property bool|null $canSubscribeDashboardWidgets
 * @property bool|null $canViewThumbnailAssets
 * @property bool|null $enableAnalyticsSubtotals
 * @property bool|null $enableAutoCompleteCombo
 * @property bool|null $enableDashboardComponentSnapshot
 * @property bool|null $enableDashboardFlexiTable
 * @property bool|null $enableEmailReportsToPortalUsers
 * @property bool|null $enableFloatingReportHeaders
 * @property bool|null $enableInsights
 * @property bool|null $enableLightningReportBuilder
 * @property bool|null $enableLotusNotesImages
 * @property bool|null $enableMassEnableReportBuilder
 * @property bool|null $enableNewChartsEngine
 * @property bool|null $enablePowerInsights
 * @property bool|null $enableRemoveFooterForRepDisplay
 * @property bool|null $enableRemoveFooterFromRepExp
 * @property bool|null $enableReportFieldToFieldPref
 * @property bool|null $enableReportUniqueRowCountPref
 * @property bool|null $enableSFXJoinedReportsEnable
 * @property bool|null $enableSmartDataDiscovery
 * @property bool|null $enableUseOldChartsLookAndFeel
 * @property bool|null $enableWaveReplication
 * @property bool|null $enableWaveSharingInheritance
 * @property bool|null $enableWaveTemplate
 * @property bool|null $enableWaveTrendedDatasetCleanup
 */
class AnalyticsSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setAlwaysGenPreviews(bool $alwaysGenPreviews)
    {
        $this->alwaysGenPreviews = $alwaysGenPreviews;
    }

    public function setAnalyticsAdoptionMetadata(bool $analyticsAdoptionMetadata)
    {
        $this->analyticsAdoptionMetadata = $analyticsAdoptionMetadata;
    }

    public function setCanAccessAnalyticsViaAPI(bool $canAccessAnalyticsViaAPI)
    {
        $this->canAccessAnalyticsViaAPI = $canAccessAnalyticsViaAPI;
    }

    public function setCanAnnotateDashboards(bool $canAnnotateDashboards)
    {
        $this->canAnnotateDashboards = $canAnnotateDashboards;
    }

    public function setCanEnableSavedView(bool $canEnableSavedView)
    {
        $this->canEnableSavedView = $canEnableSavedView;
    }

    public function setCanExploreDataConversationally(bool $canExploreDataConversationally)
    {
        $this->canExploreDataConversationally = $canExploreDataConversationally;
    }

    public function setCanShareAppsWithCommunities(bool $canShareAppsWithCommunities)
    {
        $this->canShareAppsWithCommunities = $canShareAppsWithCommunities;
    }

    public function setCanSubscribeDashboardWidgets(bool $canSubscribeDashboardWidgets)
    {
        $this->canSubscribeDashboardWidgets = $canSubscribeDashboardWidgets;
    }

    public function setCanViewThumbnailAssets(bool $canViewThumbnailAssets)
    {
        $this->canViewThumbnailAssets = $canViewThumbnailAssets;
    }

    public function setEnableAnalyticsSubtotals(bool $enableAnalyticsSubtotals)
    {
        $this->enableAnalyticsSubtotals = $enableAnalyticsSubtotals;
    }

    public function setEnableAutoCompleteCombo(bool $enableAutoCompleteCombo)
    {
        $this->enableAutoCompleteCombo = $enableAutoCompleteCombo;
    }

    public function setEnableDashboardComponentSnapshot(bool $enableDashboardComponentSnapshot)
    {
        $this->enableDashboardComponentSnapshot = $enableDashboardComponentSnapshot;
    }

    public function setEnableDashboardFlexiTable(bool $enableDashboardFlexiTable)
    {
        $this->enableDashboardFlexiTable = $enableDashboardFlexiTable;
    }

    public function setEnableEmailReportsToPortalUsers(bool $enableEmailReportsToPortalUsers)
    {
        $this->enableEmailReportsToPortalUsers = $enableEmailReportsToPortalUsers;
    }

    public function setEnableFloatingReportHeaders(bool $enableFloatingReportHeaders)
    {
        $this->enableFloatingReportHeaders = $enableFloatingReportHeaders;
    }

    public function setEnableInsights(bool $enableInsights)
    {
        $this->enableInsights = $enableInsights;
    }

    public function setEnableLightningReportBuilder(bool $enableLightningReportBuilder)
    {
        $this->enableLightningReportBuilder = $enableLightningReportBuilder;
    }

    public function setEnableLotusNotesImages(bool $enableLotusNotesImages)
    {
        $this->enableLotusNotesImages = $enableLotusNotesImages;
    }

    public function setEnableMassEnableReportBuilder(bool $enableMassEnableReportBuilder)
    {
        $this->enableMassEnableReportBuilder = $enableMassEnableReportBuilder;
    }

    public function setEnableNewChartsEngine(bool $enableNewChartsEngine)
    {
        $this->enableNewChartsEngine = $enableNewChartsEngine;
    }

    public function setEnablePowerInsights(bool $enablePowerInsights)
    {
        $this->enablePowerInsights = $enablePowerInsights;
    }

    public function setEnableRemoveFooterForRepDisplay(bool $enableRemoveFooterForRepDisplay)
    {
        $this->enableRemoveFooterForRepDisplay = $enableRemoveFooterForRepDisplay;
    }

    public function setEnableRemoveFooterFromRepExp(bool $enableRemoveFooterFromRepExp)
    {
        $this->enableRemoveFooterFromRepExp = $enableRemoveFooterFromRepExp;
    }

    public function setEnableReportFieldToFieldPref(bool $enableReportFieldToFieldPref)
    {
        $this->enableReportFieldToFieldPref = $enableReportFieldToFieldPref;
    }

    public function setEnableReportUniqueRowCountPref(bool $enableReportUniqueRowCountPref)
    {
        $this->enableReportUniqueRowCountPref = $enableReportUniqueRowCountPref;
    }

    public function setEnableSFXJoinedReportsEnable(bool $enableSFXJoinedReportsEnable)
    {
        $this->enableSFXJoinedReportsEnable = $enableSFXJoinedReportsEnable;
    }

    public function setEnableSmartDataDiscovery(bool $enableSmartDataDiscovery)
    {
        $this->enableSmartDataDiscovery = $enableSmartDataDiscovery;
    }

    public function setEnableUseOldChartsLookAndFeel(bool $enableUseOldChartsLookAndFeel)
    {
        $this->enableUseOldChartsLookAndFeel = $enableUseOldChartsLookAndFeel;
    }

    public function setEnableWaveReplication(bool $enableWaveReplication)
    {
        $this->enableWaveReplication = $enableWaveReplication;
    }

    public function setEnableWaveSharingInheritance(bool $enableWaveSharingInheritance)
    {
        $this->enableWaveSharingInheritance = $enableWaveSharingInheritance;
    }

    public function setEnableWaveTemplate(bool $enableWaveTemplate)
    {
        $this->enableWaveTemplate = $enableWaveTemplate;
    }

    public function setEnableWaveTrendedDatasetCleanup(bool $enableWaveTrendedDatasetCleanup)
    {
        $this->enableWaveTrendedDatasetCleanup = $enableWaveTrendedDatasetCleanup;
    }
}

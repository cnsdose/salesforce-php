<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class Translations
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property CustomApplicationTranslation[]|null $customApplications
 * @property CustomDataTypeTranslation[]|null $customDataTypeTranslations
 * @property CustomLabelTranslation[]|null $customLabels
 * @property CustomPageWebLinkTranslation[]|null $customPageWebLinks
 * @property CustomTabTranslation[]|null $customTabs
 * @property FlowDefinitionTranslation[]|null $flowDefinitions
 * @property GlobalQuickActionTranslation[]|null $quickActions
 * @property ReportTypeTranslation[]|null $reportTypes
 * @property ScontrolTranslation[]|null $scontrols
 */
class Translations extends Metadata
{
    public static $classMap = [
        'customApplications' => [
            'multiple' => true,
            'type' => CustomApplicationTranslation::class,
        ],
        'customDataTypeTranslations' => [
            'multiple' => true,
            'type' => CustomDataTypeTranslation::class,
        ],
        'customLabels' => [
            'multiple' => true,
            'type' => CustomLabelTranslation::class,
        ],
        'customPageWebLinks' => [
            'multiple' => true,
            'type' => CustomPageWebLinkTranslation::class,
        ],
        'customTabs' => [
            'multiple' => true,
            'type' => CustomTabTranslation::class,
        ],
        'flowDefinitions' => [
            'multiple' => true,
            'type' => FlowDefinitionTranslation::class,
        ],
        'quickActions' => [
            'multiple' => true,
            'type' => GlobalQuickActionTranslation::class,
        ],
        'reportTypes' => [
            'multiple' => true,
            'type' => ReportTypeTranslation::class,
        ],
        'scontrols' => [
            'multiple' => true,
            'type' => ScontrolTranslation::class,
        ],
    ];

    public function setCustomApplications(array $customApplications)
    {
        $this->customApplications = $customApplications;
    }

    public function setCustomDataTypeTranslations(array $customDataTypeTranslations)
    {
        $this->customDataTypeTranslations = $customDataTypeTranslations;
    }

    public function setCustomLabels(array $customLabels)
    {
        $this->customLabels = $customLabels;
    }

    public function setCustomPageWebLinks(array $customPageWebLinks)
    {
        $this->customPageWebLinks = $customPageWebLinks;
    }

    public function setCustomTabs(array $customTabs)
    {
        $this->customTabs = $customTabs;
    }

    public function setFlowDefinitions(array $flowDefinitions)
    {
        $this->flowDefinitions = $flowDefinitions;
    }

    public function setQuickActions(array $quickActions)
    {
        $this->quickActions = $quickActions;
    }

    public function setReportTypes(array $reportTypes)
    {
        $this->reportTypes = $reportTypes;
    }

    public function setScontrols(array $scontrols)
    {
        $this->scontrols = $scontrols;
    }
}

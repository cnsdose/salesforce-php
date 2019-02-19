<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class Dashboard
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $backgroundEndColor
 * @property string|null $backgroundFadeDirection
 * @property string|null $backgroundStartColor
 * @property string|null $chartTheme
 * @property string|null $colorPalette
 * @property string|null $dashboardChartTheme
 * @property string|null $dashboardColorPalette
 * @property DashboardFilter[]|null $dashboardFilters
 * @property DashboardGridLayout|null $dashboardGridLayout
 * @property string|null $dashboardResultRefreshedDate
 * @property string|null $dashboardResultRunningUser
 * @property string|null $dashboardType
 * @property string|null $description
 * @property string|null $folderName
 * @property bool|null $isGridLayout
 * @property DashboardComponentSection|null $leftSection
 * @property DashboardComponentSection|null $middleSection
 * @property int|null $numSubscriptions
 * @property DashboardComponentSection|null $rightSection
 * @property string|null $runningUser
 * @property string|null $textColor
 * @property string|null $title
 * @property string|null $titleColor
 * @property int|null $titleSize
 */
class Dashboard extends Metadata
{
    public static $classMap = [
        'dashboardFilters' => [
            'multiple' => true,
            'type' => DashboardFilter::class,
        ],
        'dashboardGridLayout' => [
            'multiple' => false,
            'type' => DashboardGridLayout::class,
        ],
        'leftSection' => [
            'multiple' => false,
            'type' => DashboardComponentSection::class,
        ],
        'middleSection' => [
            'multiple' => false,
            'type' => DashboardComponentSection::class,
        ],
        'rightSection' => [
            'multiple' => false,
            'type' => DashboardComponentSection::class,
        ],
    ];

    public function setBackgroundEndColor(string $backgroundEndColor)
    {
        $this->backgroundEndColor = $backgroundEndColor;
    }

    public function setBackgroundFadeDirection(ChartBackgroundDirection $backgroundFadeDirection)
    {
        $this->backgroundFadeDirection = $backgroundFadeDirection->getValue();
    }

    public function setBackgroundStartColor(string $backgroundStartColor)
    {
        $this->backgroundStartColor = $backgroundStartColor;
    }

    public function setChartTheme(ChartTheme $chartTheme)
    {
        $this->chartTheme = $chartTheme->getValue();
    }

    public function setColorPalette(ChartColorPalettes $colorPalette)
    {
        $this->colorPalette = $colorPalette->getValue();
    }

    public function setDashboardChartTheme(ChartTheme $dashboardChartTheme)
    {
        $this->dashboardChartTheme = $dashboardChartTheme->getValue();
    }

    public function setDashboardColorPalette(ChartColorPalettes $dashboardColorPalette)
    {
        $this->dashboardColorPalette = $dashboardColorPalette->getValue();
    }

    public function setDashboardFilters(array $dashboardFilters)
    {
        $this->dashboardFilters = $dashboardFilters;
    }

    public function setDashboardGridLayout(DashboardGridLayout $dashboardGridLayout)
    {
        $this->dashboardGridLayout = $dashboardGridLayout;
    }

    public function setDashboardResultRefreshedDate(string $dashboardResultRefreshedDate)
    {
        $this->dashboardResultRefreshedDate = $dashboardResultRefreshedDate;
    }

    public function setDashboardResultRunningUser(string $dashboardResultRunningUser)
    {
        $this->dashboardResultRunningUser = $dashboardResultRunningUser;
    }

    public function setDashboardType(DashboardType $dashboardType)
    {
        $this->dashboardType = $dashboardType->getValue();
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setFolderName(string $folderName)
    {
        $this->folderName = $folderName;
    }

    public function setIsGridLayout(bool $isGridLayout)
    {
        $this->isGridLayout = $isGridLayout;
    }

    public function setLeftSection(DashboardComponentSection $leftSection)
    {
        $this->leftSection = $leftSection;
    }

    public function setMiddleSection(DashboardComponentSection $middleSection)
    {
        $this->middleSection = $middleSection;
    }

    public function setNumSubscriptions(int $numSubscriptions)
    {
        $this->numSubscriptions = $numSubscriptions;
    }

    public function setRightSection(DashboardComponentSection $rightSection)
    {
        $this->rightSection = $rightSection;
    }

    public function setRunningUser(string $runningUser)
    {
        $this->runningUser = $runningUser;
    }

    public function setTextColor(string $textColor)
    {
        $this->textColor = $textColor;
    }

    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    public function setTitleColor(string $titleColor)
    {
        $this->titleColor = $titleColor;
    }

    public function setTitleSize(int $titleSize)
    {
        $this->titleSize = $titleSize;
    }
}

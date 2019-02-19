<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CommunityTemplateDefinition
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $baseTemplate
 * @property CommunityTemplateBundleInfo[]|null $bundlesInfo
 * @property string|null $category
 * @property string|null $defaultBrandingSet
 * @property string|null $defaultThemeDefinition
 * @property string|null $description
 * @property bool|null $enableExtendedCleanUpOnDelete
 * @property string|null $masterLabel
 * @property NavigationLinkSet[]|null $navigationLinkSet
 * @property CommunityTemplatePageSetting[]|null $pageSetting
 * @property string|null $publisher
 */
class CommunityTemplateDefinition extends Metadata
{
    public static $classMap = [
        'bundlesInfo' => [
            'multiple' => true,
            'type' => CommunityTemplateBundleInfo::class,
        ],
        'navigationLinkSet' => [
            'multiple' => true,
            'type' => NavigationLinkSet::class,
        ],
        'pageSetting' => [
            'multiple' => true,
            'type' => CommunityTemplatePageSetting::class,
        ],
    ];

    public function setBaseTemplate(CommunityBaseTemplate $baseTemplate)
    {
        $this->baseTemplate = $baseTemplate->getValue();
    }

    public function setBundlesInfo(array $bundlesInfo)
    {
        $this->bundlesInfo = $bundlesInfo;
    }

    public function setCategory(CommunityTemplateCategory $category)
    {
        $this->category = $category->getValue();
    }

    public function setDefaultBrandingSet(string $defaultBrandingSet)
    {
        $this->defaultBrandingSet = $defaultBrandingSet;
    }

    public function setDefaultThemeDefinition(string $defaultThemeDefinition)
    {
        $this->defaultThemeDefinition = $defaultThemeDefinition;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setEnableExtendedCleanUpOnDelete(bool $enableExtendedCleanUpOnDelete)
    {
        $this->enableExtendedCleanUpOnDelete = $enableExtendedCleanUpOnDelete;
    }

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }

    public function setNavigationLinkSet(array $navigationLinkSet)
    {
        $this->navigationLinkSet = $navigationLinkSet;
    }

    public function setPageSetting(array $pageSetting)
    {
        $this->pageSetting = $pageSetting;
    }

    public function setPublisher(string $publisher)
    {
        $this->publisher = $publisher;
    }
}

<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CMSConnectSource
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property CMSConnectAsset[]|null $cmsConnectAsset
 * @property CMSConnectLanguage[]|null $cmsConnectLanguage
 * @property CMSConnectPersonalization|null $cmsConnectPersonalization
 * @property CMSConnectResourceType[]|null $cmsConnectResourceType
 * @property string|null $connectionType
 * @property string|null $cssScope
 * @property string|null $developerName
 * @property string|null $languageEnabled
 * @property string|null $masterLabel
 * @property string|null $namedCredential
 * @property string|null $personalizationEnabled
 * @property string|null $rootPath
 * @property int|null $sortOrder
 * @property string|null $status
 * @property string|null $type
 * @property string|null $websiteUrl
 */
class CMSConnectSource extends Metadata
{
    public static $classMap = [
        'cmsConnectAsset' => [
            'multiple' => true,
            'type' => CMSConnectAsset::class,
        ],
        'cmsConnectLanguage' => [
            'multiple' => true,
            'type' => CMSConnectLanguage::class,
        ],
        'cmsConnectPersonalization' => [
            'multiple' => false,
            'type' => CMSConnectPersonalization::class,
        ],
        'cmsConnectResourceType' => [
            'multiple' => true,
            'type' => CMSConnectResourceType::class,
        ],
    ];

    public function setCmsConnectAsset(array $cmsConnectAsset)
    {
        $this->cmsConnectAsset = $cmsConnectAsset;
    }

    public function setCmsConnectLanguage(array $cmsConnectLanguage)
    {
        $this->cmsConnectLanguage = $cmsConnectLanguage;
    }

    public function setCmsConnectPersonalization(CMSConnectPersonalization $cmsConnectPersonalization)
    {
        $this->cmsConnectPersonalization = $cmsConnectPersonalization;
    }

    public function setCmsConnectResourceType(array $cmsConnectResourceType)
    {
        $this->cmsConnectResourceType = $cmsConnectResourceType;
    }

    public function setConnectionType(CMSSourceConnectionType $connectionType)
    {
        $this->connectionType = $connectionType->getValue();
    }

    public function setCssScope(string $cssScope)
    {
        $this->cssScope = $cssScope;
    }

    public function setDeveloperName(string $developerName)
    {
        $this->developerName = $developerName;
    }

    public function setLanguageEnabled(string $languageEnabled)
    {
        $this->languageEnabled = $languageEnabled;
    }

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }

    public function setNamedCredential(string $namedCredential)
    {
        $this->namedCredential = $namedCredential;
    }

    public function setPersonalizationEnabled(string $personalizationEnabled)
    {
        $this->personalizationEnabled = $personalizationEnabled;
    }

    public function setRootPath(string $rootPath)
    {
        $this->rootPath = $rootPath;
    }

    public function setSortOrder(int $sortOrder)
    {
        $this->sortOrder = $sortOrder;
    }

    public function setStatus(CMSConnectionStatus $status)
    {
        $this->status = $status->getValue();
    }

    public function setType(CMSConnectionSourceType $type)
    {
        $this->type = $type->getValue();
    }

    public function setWebsiteUrl(string $websiteUrl)
    {
        $this->websiteUrl = $websiteUrl;
    }
}

<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class KnowledgeCaseSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $articlePDFCreationProfile
 * @property KnowledgeCommunitiesSettings|null $articlePublicSharingCommunities
 * @property KnowledgeSitesSettings|null $articlePublicSharingSites
 * @property KnowledgeSitesSettings|null $articlePublicSharingSitesChatterAnswers
 * @property string|null $assignTo
 * @property string|null $customizationClass
 * @property string|null $defaultContributionArticleType
 * @property string|null $editor
 * @property bool|null $enableArticleCreation
 * @property bool|null $enableArticlePublicSharingSites
 * @property bool|null $enableCaseDataCategoryMapping
 * @property bool|null $useProfileForPDFCreation
 */
class KnowledgeCaseSettings
{
    public static $classMap = [
        'articlePublicSharingCommunities' => [
            'multiple' => false,
            'type' => KnowledgeCommunitiesSettings::class,
        ],
        'articlePublicSharingSites' => [
            'multiple' => false,
            'type' => KnowledgeSitesSettings::class,
        ],
        'articlePublicSharingSitesChatterAnswers' => [
            'multiple' => false,
            'type' => KnowledgeSitesSettings::class,
        ],
    ];

    public function setArticlePDFCreationProfile(string $articlePDFCreationProfile)
    {
        $this->articlePDFCreationProfile = $articlePDFCreationProfile;
    }

    public function setArticlePublicSharingCommunities(KnowledgeCommunitiesSettings $articlePublicSharingCommunities)
    {
        $this->articlePublicSharingCommunities = $articlePublicSharingCommunities;
    }

    public function setArticlePublicSharingSites(KnowledgeSitesSettings $articlePublicSharingSites)
    {
        $this->articlePublicSharingSites = $articlePublicSharingSites;
    }

    public function setArticlePublicSharingSitesChatterAnswers(KnowledgeSitesSettings $articlePublicSharingSitesChatterAnswers)
    {
        $this->articlePublicSharingSitesChatterAnswers = $articlePublicSharingSitesChatterAnswers;
    }

    public function setAssignTo(string $assignTo)
    {
        $this->assignTo = $assignTo;
    }

    public function setCustomizationClass(string $customizationClass)
    {
        $this->customizationClass = $customizationClass;
    }

    public function setDefaultContributionArticleType(string $defaultContributionArticleType)
    {
        $this->defaultContributionArticleType = $defaultContributionArticleType;
    }

    public function setEditor(KnowledgeCaseEditor $editor)
    {
        $this->editor = $editor->getValue();
    }

    public function setEnableArticleCreation(bool $enableArticleCreation)
    {
        $this->enableArticleCreation = $enableArticleCreation;
    }

    public function setEnableArticlePublicSharingSites(bool $enableArticlePublicSharingSites)
    {
        $this->enableArticlePublicSharingSites = $enableArticlePublicSharingSites;
    }

    public function setEnableCaseDataCategoryMapping(bool $enableCaseDataCategoryMapping)
    {
        $this->enableCaseDataCategoryMapping = $enableCaseDataCategoryMapping;
    }

    public function setUseProfileForPDFCreation(bool $useProfileForPDFCreation)
    {
        $this->useProfileForPDFCreation = $useProfileForPDFCreation;
    }
}

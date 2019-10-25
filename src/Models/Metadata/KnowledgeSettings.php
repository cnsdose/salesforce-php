<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class KnowledgeSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property KnowledgeAnswerSettings|null $answers
 * @property KnowledgeCaseSettings|null $cases
 * @property string|null $defaultLanguage
 * @property bool|null $enableChatterQuestionKBDeflection
 * @property bool|null $enableCreateEditOnArticlesTab
 * @property bool|null $enableExternalMediaContent
 * @property bool|null $enableKnowledge
 * @property bool|null $enableKnowledgeArticleTextHighlights
 * @property bool|null $enableKnowledgeKeywordAutoComplete
 * @property bool|null $enableKnowledgeTitleAutoComplete
 * @property bool|null $enableLightningKbAutoLoadRichTextField
 * @property bool|null $enableLightningKnowledge
 * @property KnowledgeLanguageSettings|null $languages
 * @property bool|null $showArticleSummariesCustomerPortal
 * @property bool|null $showArticleSummariesInternalApp
 * @property bool|null $showArticleSummariesPartnerPortal
 * @property bool|null $showValidationStatusField
 * @property KnowledgeSuggestedArticlesSettings|null $suggestedArticles
 */
class KnowledgeSettings extends Metadata
{
    public static $classMap = [
        'answers' => [
            'multiple' => false,
            'type' => KnowledgeAnswerSettings::class,
        ],
        'cases' => [
            'multiple' => false,
            'type' => KnowledgeCaseSettings::class,
        ],
        'languages' => [
            'multiple' => false,
            'type' => KnowledgeLanguageSettings::class,
        ],
        'suggestedArticles' => [
            'multiple' => false,
            'type' => KnowledgeSuggestedArticlesSettings::class,
        ],
    ];

    public function setAnswers(KnowledgeAnswerSettings $answers)
    {
        $this->answers = $answers;
    }

    public function setCases(KnowledgeCaseSettings $cases)
    {
        $this->cases = $cases;
    }

    public function setDefaultLanguage(string $defaultLanguage)
    {
        $this->defaultLanguage = $defaultLanguage;
    }

    public function setEnableChatterQuestionKBDeflection(bool $enableChatterQuestionKBDeflection)
    {
        $this->enableChatterQuestionKBDeflection = $enableChatterQuestionKBDeflection;
    }

    public function setEnableCreateEditOnArticlesTab(bool $enableCreateEditOnArticlesTab)
    {
        $this->enableCreateEditOnArticlesTab = $enableCreateEditOnArticlesTab;
    }

    public function setEnableExternalMediaContent(bool $enableExternalMediaContent)
    {
        $this->enableExternalMediaContent = $enableExternalMediaContent;
    }

    public function setEnableKnowledge(bool $enableKnowledge)
    {
        $this->enableKnowledge = $enableKnowledge;
    }

    public function setEnableKnowledgeArticleTextHighlights(bool $enableKnowledgeArticleTextHighlights)
    {
        $this->enableKnowledgeArticleTextHighlights = $enableKnowledgeArticleTextHighlights;
    }

    public function setEnableKnowledgeKeywordAutoComplete(bool $enableKnowledgeKeywordAutoComplete)
    {
        $this->enableKnowledgeKeywordAutoComplete = $enableKnowledgeKeywordAutoComplete;
    }

    public function setEnableKnowledgeTitleAutoComplete(bool $enableKnowledgeTitleAutoComplete)
    {
        $this->enableKnowledgeTitleAutoComplete = $enableKnowledgeTitleAutoComplete;
    }

    public function setEnableLightningKbAutoLoadRichTextField(bool $enableLightningKbAutoLoadRichTextField)
    {
        $this->enableLightningKbAutoLoadRichTextField = $enableLightningKbAutoLoadRichTextField;
    }

    public function setEnableLightningKnowledge(bool $enableLightningKnowledge)
    {
        $this->enableLightningKnowledge = $enableLightningKnowledge;
    }

    public function setLanguages(KnowledgeLanguageSettings $languages)
    {
        $this->languages = $languages;
    }

    public function setShowArticleSummariesCustomerPortal(bool $showArticleSummariesCustomerPortal)
    {
        $this->showArticleSummariesCustomerPortal = $showArticleSummariesCustomerPortal;
    }

    public function setShowArticleSummariesInternalApp(bool $showArticleSummariesInternalApp)
    {
        $this->showArticleSummariesInternalApp = $showArticleSummariesInternalApp;
    }

    public function setShowArticleSummariesPartnerPortal(bool $showArticleSummariesPartnerPortal)
    {
        $this->showArticleSummariesPartnerPortal = $showArticleSummariesPartnerPortal;
    }

    public function setShowValidationStatusField(bool $showValidationStatusField)
    {
        $this->showValidationStatusField = $showValidationStatusField;
    }

    public function setSuggestedArticles(KnowledgeSuggestedArticlesSettings $suggestedArticles)
    {
        $this->suggestedArticles = $suggestedArticles;
    }
}

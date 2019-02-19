<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class Community
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $active
 * @property string|null $chatterAnswersFacebookSsoUrl
 * @property string|null $communityFeedPage
 * @property string|null $dataCategoryName
 * @property string|null $description
 * @property string|null $emailFooterDocument
 * @property string|null $emailHeaderDocument
 * @property string|null $emailNotificationUrl
 * @property bool|null $enableChatterAnswers
 * @property bool|null $enablePrivateQuestions
 * @property string|null $expertsGroup
 * @property string|null $portal
 * @property ReputationLevels|null $reputationLevels
 * @property bool|null $showInPortal
 * @property string|null $site
 */
class Community extends Metadata
{
    public static $classMap = [
        'reputationLevels' => [
            'multiple' => false,
            'type' => ReputationLevels::class,
        ],
    ];

    public function setActive(bool $active)
    {
        $this->active = $active;
    }

    public function setChatterAnswersFacebookSsoUrl(string $chatterAnswersFacebookSsoUrl)
    {
        $this->chatterAnswersFacebookSsoUrl = $chatterAnswersFacebookSsoUrl;
    }

    public function setCommunityFeedPage(string $communityFeedPage)
    {
        $this->communityFeedPage = $communityFeedPage;
    }

    public function setDataCategoryName(string $dataCategoryName)
    {
        $this->dataCategoryName = $dataCategoryName;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setEmailFooterDocument(string $emailFooterDocument)
    {
        $this->emailFooterDocument = $emailFooterDocument;
    }

    public function setEmailHeaderDocument(string $emailHeaderDocument)
    {
        $this->emailHeaderDocument = $emailHeaderDocument;
    }

    public function setEmailNotificationUrl(string $emailNotificationUrl)
    {
        $this->emailNotificationUrl = $emailNotificationUrl;
    }

    public function setEnableChatterAnswers(bool $enableChatterAnswers)
    {
        $this->enableChatterAnswers = $enableChatterAnswers;
    }

    public function setEnablePrivateQuestions(bool $enablePrivateQuestions)
    {
        $this->enablePrivateQuestions = $enablePrivateQuestions;
    }

    public function setExpertsGroup(string $expertsGroup)
    {
        $this->expertsGroup = $expertsGroup;
    }

    public function setPortal(string $portal)
    {
        $this->portal = $portal;
    }

    public function setReputationLevels(ReputationLevels $reputationLevels)
    {
        $this->reputationLevels = $reputationLevels;
    }

    public function setShowInPortal(bool $showInPortal)
    {
        $this->showInPortal = $showInPortal;
    }

    public function setSite(string $site)
    {
        $this->site = $site;
    }
}

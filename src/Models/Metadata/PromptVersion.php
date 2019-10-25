<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class PromptVersion
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $actionButtonLabel
 * @property string|null $actionButtonLink
 * @property string|null $body
 * @property string|null $customApplication
 * @property int|null $delayDays
 * @property string|null $description
 * @property string|null $dismissButtonLabel
 * @property string|null $displayPosition
 * @property string|null $displayType
 * @property string|null $endDate
 * @property string|null $header
 * @property string|null $indexWithIsPublished
 * @property string|null $indexWithoutIsPublished
 * @property bool|null $isPublished
 * @property string|null $masterLabel
 * @property string|null $publishedByUser
 * @property string|null $publishedDate
 * @property bool|null $shouldDisplayActionButton
 * @property string|null $startDate
 * @property string|null $targetAppDeveloperName
 * @property string|null $targetAppNamespacePrefix
 * @property string|null $targetPageKey1
 * @property string|null $targetPageKey2
 * @property string|null $targetPageType
 * @property int|null $timesToDisplay
 * @property string|null $title
 * @property UiFormulaRule|null $uiFormulaRule
 * @property string|null $userAccess
 * @property int|null $versionNumber
 */
class PromptVersion
{
    public static $classMap = [
        'uiFormulaRule' => [
            'multiple' => false,
            'type' => UiFormulaRule::class,
        ],
    ];

    public function setActionButtonLabel(string $actionButtonLabel)
    {
        $this->actionButtonLabel = $actionButtonLabel;
    }

    public function setActionButtonLink(string $actionButtonLink)
    {
        $this->actionButtonLink = $actionButtonLink;
    }

    public function setBody(string $body)
    {
        $this->body = $body;
    }

    public function setCustomApplication(string $customApplication)
    {
        $this->customApplication = $customApplication;
    }

    public function setDelayDays(int $delayDays)
    {
        $this->delayDays = $delayDays;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setDismissButtonLabel(string $dismissButtonLabel)
    {
        $this->dismissButtonLabel = $dismissButtonLabel;
    }

    public function setDisplayPosition(PromptDisplayPosition $displayPosition)
    {
        $this->displayPosition = $displayPosition->getValue();
    }

    public function setDisplayType(PromptDisplayType $displayType)
    {
        $this->displayType = $displayType->getValue();
    }

    public function setEndDate(string $endDate)
    {
        $this->endDate = $endDate;
    }

    public function setHeader(string $header)
    {
        $this->header = $header;
    }

    public function setIndexWithIsPublished(string $indexWithIsPublished)
    {
        $this->indexWithIsPublished = $indexWithIsPublished;
    }

    public function setIndexWithoutIsPublished(string $indexWithoutIsPublished)
    {
        $this->indexWithoutIsPublished = $indexWithoutIsPublished;
    }

    public function setIsPublished(bool $isPublished)
    {
        $this->isPublished = $isPublished;
    }

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }

    public function setPublishedByUser(string $publishedByUser)
    {
        $this->publishedByUser = $publishedByUser;
    }

    public function setPublishedDate(string $publishedDate)
    {
        $this->publishedDate = $publishedDate;
    }

    public function setShouldDisplayActionButton(bool $shouldDisplayActionButton)
    {
        $this->shouldDisplayActionButton = $shouldDisplayActionButton;
    }

    public function setStartDate(string $startDate)
    {
        $this->startDate = $startDate;
    }

    public function setTargetAppDeveloperName(string $targetAppDeveloperName)
    {
        $this->targetAppDeveloperName = $targetAppDeveloperName;
    }

    public function setTargetAppNamespacePrefix(string $targetAppNamespacePrefix)
    {
        $this->targetAppNamespacePrefix = $targetAppNamespacePrefix;
    }

    public function setTargetPageKey1(string $targetPageKey1)
    {
        $this->targetPageKey1 = $targetPageKey1;
    }

    public function setTargetPageKey2(string $targetPageKey2)
    {
        $this->targetPageKey2 = $targetPageKey2;
    }

    public function setTargetPageType(string $targetPageType)
    {
        $this->targetPageType = $targetPageType;
    }

    public function setTimesToDisplay(int $timesToDisplay)
    {
        $this->timesToDisplay = $timesToDisplay;
    }

    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    public function setUiFormulaRule(UiFormulaRule $uiFormulaRule)
    {
        $this->uiFormulaRule = $uiFormulaRule;
    }

    public function setUserAccess(PromptUserAccess $userAccess)
    {
        $this->userAccess = $userAccess->getValue();
    }

    public function setVersionNumber(int $versionNumber)
    {
        $this->versionNumber = $versionNumber;
    }
}

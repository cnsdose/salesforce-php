<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class Layout
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string[]|null $customButtons
 * @property CustomConsoleComponents|null $customConsoleComponents
 * @property bool|null $emailDefault
 * @property string[]|null $excludeButtons
 * @property FeedLayout|null $feedLayout
 * @property string[]|null $headers
 * @property LayoutSection[]|null $layoutSections
 * @property MiniLayout|null $miniLayout
 * @property string[]|null $multilineLayoutFields
 * @property PlatformActionList|null $platformActionList
 * @property QuickActionList|null $quickActionList
 * @property RelatedContent|null $relatedContent
 * @property RelatedListItem[]|null $relatedLists
 * @property string[]|null $relatedObjects
 * @property bool|null $runAssignmentRulesDefault
 * @property bool|null $showEmailCheckbox
 * @property bool|null $showHighlightsPanel
 * @property bool|null $showInteractionLogPanel
 * @property bool|null $showKnowledgeComponent
 * @property bool|null $showRunAssignmentRulesCheckbox
 * @property bool|null $showSolutionSection
 * @property bool|null $showSubmitAndAttachButton
 * @property SummaryLayout|null $summaryLayout
 */
class Layout extends Metadata
{
    public static $classMap = [
        'customConsoleComponents' => [
            'multiple' => false,
            'type' => CustomConsoleComponents::class,
        ],
        'feedLayout' => [
            'multiple' => false,
            'type' => FeedLayout::class,
        ],
        'layoutSections' => [
            'multiple' => true,
            'type' => LayoutSection::class,
        ],
        'miniLayout' => [
            'multiple' => false,
            'type' => MiniLayout::class,
        ],
        'platformActionList' => [
            'multiple' => false,
            'type' => PlatformActionList::class,
        ],
        'quickActionList' => [
            'multiple' => false,
            'type' => QuickActionList::class,
        ],
        'relatedContent' => [
            'multiple' => false,
            'type' => RelatedContent::class,
        ],
        'relatedLists' => [
            'multiple' => true,
            'type' => RelatedListItem::class,
        ],
        'summaryLayout' => [
            'multiple' => false,
            'type' => SummaryLayout::class,
        ],
    ];

    public function setCustomButtons(array $customButtons)
    {
        $this->customButtons = $customButtons;
    }

    public function setCustomConsoleComponents(CustomConsoleComponents $customConsoleComponents)
    {
        $this->customConsoleComponents = $customConsoleComponents;
    }

    public function setEmailDefault(bool $emailDefault)
    {
        $this->emailDefault = $emailDefault;
    }

    public function setExcludeButtons(array $excludeButtons)
    {
        $this->excludeButtons = $excludeButtons;
    }

    public function setFeedLayout(FeedLayout $feedLayout)
    {
        $this->feedLayout = $feedLayout;
    }

    public function setHeaders(array $headers)
    {
        $this->headers = $headers;
    }

    public function setLayoutSections(array $layoutSections)
    {
        $this->layoutSections = $layoutSections;
    }

    public function setMiniLayout(MiniLayout $miniLayout)
    {
        $this->miniLayout = $miniLayout;
    }

    public function setMultilineLayoutFields(array $multilineLayoutFields)
    {
        $this->multilineLayoutFields = $multilineLayoutFields;
    }

    public function setPlatformActionList(PlatformActionList $platformActionList)
    {
        $this->platformActionList = $platformActionList;
    }

    public function setQuickActionList(QuickActionList $quickActionList)
    {
        $this->quickActionList = $quickActionList;
    }

    public function setRelatedContent(RelatedContent $relatedContent)
    {
        $this->relatedContent = $relatedContent;
    }

    public function setRelatedLists(array $relatedLists)
    {
        $this->relatedLists = $relatedLists;
    }

    public function setRelatedObjects(array $relatedObjects)
    {
        $this->relatedObjects = $relatedObjects;
    }

    public function setRunAssignmentRulesDefault(bool $runAssignmentRulesDefault)
    {
        $this->runAssignmentRulesDefault = $runAssignmentRulesDefault;
    }

    public function setShowEmailCheckbox(bool $showEmailCheckbox)
    {
        $this->showEmailCheckbox = $showEmailCheckbox;
    }

    public function setShowHighlightsPanel(bool $showHighlightsPanel)
    {
        $this->showHighlightsPanel = $showHighlightsPanel;
    }

    public function setShowInteractionLogPanel(bool $showInteractionLogPanel)
    {
        $this->showInteractionLogPanel = $showInteractionLogPanel;
    }

    public function setShowKnowledgeComponent(bool $showKnowledgeComponent)
    {
        $this->showKnowledgeComponent = $showKnowledgeComponent;
    }

    public function setShowRunAssignmentRulesCheckbox(bool $showRunAssignmentRulesCheckbox)
    {
        $this->showRunAssignmentRulesCheckbox = $showRunAssignmentRulesCheckbox;
    }

    public function setShowSolutionSection(bool $showSolutionSection)
    {
        $this->showSolutionSection = $showSolutionSection;
    }

    public function setShowSubmitAndAttachButton(bool $showSubmitAndAttachButton)
    {
        $this->showSubmitAndAttachButton = $showSubmitAndAttachButton;
    }

    public function setSummaryLayout(SummaryLayout $summaryLayout)
    {
        $this->summaryLayout = $summaryLayout;
    }
}

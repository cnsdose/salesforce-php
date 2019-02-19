<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class LiveAgentConfig
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableLiveChat
 * @property bool|null $openNewAccountSubtab
 * @property bool|null $openNewCaseSubtab
 * @property bool|null $openNewContactSubtab
 * @property bool|null $openNewLeadSubtab
 * @property bool|null $openNewVFPageSubtab
 * @property string[]|null $pageNamesToOpen
 * @property bool|null $showKnowledgeArticles
 */
class LiveAgentConfig
{
    public static $classMap = [
    ];

    public function setEnableLiveChat(bool $enableLiveChat)
    {
        $this->enableLiveChat = $enableLiveChat;
    }

    public function setOpenNewAccountSubtab(bool $openNewAccountSubtab)
    {
        $this->openNewAccountSubtab = $openNewAccountSubtab;
    }

    public function setOpenNewCaseSubtab(bool $openNewCaseSubtab)
    {
        $this->openNewCaseSubtab = $openNewCaseSubtab;
    }

    public function setOpenNewContactSubtab(bool $openNewContactSubtab)
    {
        $this->openNewContactSubtab = $openNewContactSubtab;
    }

    public function setOpenNewLeadSubtab(bool $openNewLeadSubtab)
    {
        $this->openNewLeadSubtab = $openNewLeadSubtab;
    }

    public function setOpenNewVFPageSubtab(bool $openNewVFPageSubtab)
    {
        $this->openNewVFPageSubtab = $openNewVFPageSubtab;
    }

    public function setPageNamesToOpen(array $pageNamesToOpen)
    {
        $this->pageNamesToOpen = $pageNamesToOpen;
    }

    public function setShowKnowledgeArticles(bool $showKnowledgeArticles)
    {
        $this->showKnowledgeArticles = $showKnowledgeArticles;
    }
}

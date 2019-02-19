<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class KnowledgeAnswerSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $assignTo
 * @property string|null $defaultArticleType
 * @property bool|null $enableArticleCreation
 */
class KnowledgeAnswerSettings
{
    public static $classMap = [
    ];

    public function setAssignTo(string $assignTo)
    {
        $this->assignTo = $assignTo;
    }

    public function setDefaultArticleType(string $defaultArticleType)
    {
        $this->defaultArticleType = $defaultArticleType;
    }

    public function setEnableArticleCreation(bool $enableArticleCreation)
    {
        $this->enableArticleCreation = $enableArticleCreation;
    }
}

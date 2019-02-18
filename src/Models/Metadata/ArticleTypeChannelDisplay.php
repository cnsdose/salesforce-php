<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ArticleTypeChannelDisplay
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property ArticleTypeTemplate[]|null $articleTypeTemplates
 */
class ArticleTypeChannelDisplay
{
    public function setArticleTypeTemplates(array $articleTypeTemplates)
    {
        $this->articleTypeTemplates = $articleTypeTemplates;
    }
}

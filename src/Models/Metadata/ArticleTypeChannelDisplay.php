<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 15/02/19
 * Time: 2:37 PM
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ArticleTypeChannelDisplay
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property ArticleTypeTemplate[] articleTypeTemplates
 */
class ArticleTypeChannelDisplay
{
    public function setArticleTypeTemplates(array $articleTypeTemplates)
    {
        $this->articleTypeTemplates = $articleTypeTemplates;
    }
}

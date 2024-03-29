<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ArticleTypeChannelDisplay
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property ArticleTypeTemplate[]|null $articleTypeTemplates
 */
class ArticleTypeChannelDisplay
{
    public static $classMap = [
        'articleTypeTemplates' => [
            'multiple' => true,
            'type' => ArticleTypeTemplate::class,
        ],
    ];

    public function setArticleTypeTemplates(array $articleTypeTemplates)
    {
        $this->articleTypeTemplates = $articleTypeTemplates;
    }
}

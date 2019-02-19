<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ArticleTypeTemplate
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $channel
 * @property string|null $page
 * @property string|null $template
 */
class ArticleTypeTemplate
{
    public static $classMap = [
    ];

    public function setChannel(Channel $channel)
    {
        $this->channel = $channel->getValue();
    }

    public function setPage(string $page)
    {
        $this->page = $page;
    }

    public function setTemplate(Template $template)
    {
        $this->template = $template->getValue();
    }
}

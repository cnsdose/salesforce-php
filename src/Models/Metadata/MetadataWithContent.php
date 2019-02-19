<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class MetadataWithContent
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $content
 */
class MetadataWithContent extends Metadata
{
    public static $classMap = [
    ];

    public function setContent(string $content)
    {
        $this->content = $content;
    }
}

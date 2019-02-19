<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class LwcResource
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $filePath
 * @property string|null $source
 */
class LwcResource
{
    public static $classMap = [
    ];

    public function setFilePath(string $filePath)
    {
        $this->filePath = $filePath;
    }

    public function setSource(string $source)
    {
        $this->source = $source;
    }
}

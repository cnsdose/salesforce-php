<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class Orchestration
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $context
 * @property string|null $masterLabel
 */
class Orchestration extends MetadataWithContent
{
    public static $classMap = [
    ];

    public function setContext(string $context)
    {
        $this->context = $context;
    }

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }
}

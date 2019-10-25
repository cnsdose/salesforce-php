<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class Prompt
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $masterLabel
 * @property PromptVersion[]|null $promptVersions
 */
class Prompt extends Metadata
{
    public static $classMap = [
        'promptVersions' => [
            'multiple' => true,
            'type' => PromptVersion::class,
        ],
    ];

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }

    public function setPromptVersions(array $promptVersions)
    {
        $this->promptVersions = $promptVersions;
    }
}

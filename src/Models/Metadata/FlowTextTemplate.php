<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FlowTextTemplate
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $text
 */
class FlowTextTemplate extends FlowElement
{
    public static $classMap = [
    ];

    public function setText(string $text)
    {
        $this->text = $text;
    }
}

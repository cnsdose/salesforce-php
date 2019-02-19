<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FlowConnector
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $targetReference
 */
class FlowConnector extends FlowBaseElement
{
    public static $classMap = [
    ];

    public function setTargetReference(string $targetReference)
    {
        $this->targetReference = $targetReference;
    }
}

<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ManagedContentNodeType
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $helpText
 * @property bool|null $isLocalizable
 * @property bool|null $isRequired
 * @property string|null $nodeLabel
 * @property string|null $nodeName
 * @property string|null $nodeType
 * @property string|null $placeholderText
 */
class ManagedContentNodeType
{
    public static $classMap = [
    ];

    public function setHelpText(string $helpText)
    {
        $this->helpText = $helpText;
    }

    public function setIsLocalizable(bool $isLocalizable)
    {
        $this->isLocalizable = $isLocalizable;
    }

    public function setIsRequired(bool $isRequired)
    {
        $this->isRequired = $isRequired;
    }

    public function setNodeLabel(string $nodeLabel)
    {
        $this->nodeLabel = $nodeLabel;
    }

    public function setNodeName(string $nodeName)
    {
        $this->nodeName = $nodeName;
    }

    public function setNodeType(MCNodeType $nodeType)
    {
        $this->nodeType = $nodeType->getValue();
    }

    public function setPlaceholderText(string $placeholderText)
    {
        $this->placeholderText = $placeholderText;
    }
}

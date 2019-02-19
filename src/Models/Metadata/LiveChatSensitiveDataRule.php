<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class LiveChatSensitiveDataRule
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $actionType
 * @property string|null $description
 * @property int|null $enforceOn
 * @property bool|null $isEnabled
 * @property string|null $pattern
 * @property string|null $replacement
 */
class LiveChatSensitiveDataRule extends Metadata
{
    public static $classMap = [
    ];

    public function setActionType(SensitiveDataActionType $actionType)
    {
        $this->actionType = $actionType->getValue();
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setEnforceOn(int $enforceOn)
    {
        $this->enforceOn = $enforceOn;
    }

    public function setIsEnabled(bool $isEnabled)
    {
        $this->isEnabled = $isEnabled;
    }

    public function setPattern(string $pattern)
    {
        $this->pattern = $pattern;
    }

    public function setReplacement(string $replacement)
    {
        $this->replacement = $replacement;
    }
}

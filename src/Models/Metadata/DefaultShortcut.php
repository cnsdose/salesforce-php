<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class DefaultShortcut
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $action
 * @property bool|null $active
 * @property string|null $keyCommand
 */
class DefaultShortcut
{
    public static $classMap = [
    ];

    public function setAction(string $action)
    {
        $this->action = $action;
    }

    public function setActive(bool $active)
    {
        $this->active = $active;
    }

    public function setKeyCommand(string $keyCommand)
    {
        $this->keyCommand = $keyCommand;
    }
}

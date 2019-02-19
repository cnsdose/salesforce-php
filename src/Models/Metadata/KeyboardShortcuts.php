<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class KeyboardShortcuts
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property CustomShortcut[]|null $customShortcuts
 * @property DefaultShortcut[]|null $defaultShortcuts
 */
class KeyboardShortcuts
{
    public static $classMap = [
        'customShortcuts' => [
            'multiple' => true,
            'type' => CustomShortcut::class,
        ],
        'defaultShortcuts' => [
            'multiple' => true,
            'type' => DefaultShortcut::class,
        ],
    ];

    public function setCustomShortcuts(array $customShortcuts)
    {
        $this->customShortcuts = $customShortcuts;
    }

    public function setDefaultShortcuts(array $defaultShortcuts)
    {
        $this->defaultShortcuts = $defaultShortcuts;
    }
}

<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class EnhancedNotesSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableEnhancedNotes
 * @property bool|null $enableTasksOnEnhancedNotes
 */
class EnhancedNotesSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEnableEnhancedNotes(bool $enableEnhancedNotes)
    {
        $this->enableEnhancedNotes = $enableEnhancedNotes;
    }

    public function setEnableTasksOnEnhancedNotes(bool $enableTasksOnEnhancedNotes)
    {
        $this->enableTasksOnEnhancedNotes = $enableTasksOnEnhancedNotes;
    }
}

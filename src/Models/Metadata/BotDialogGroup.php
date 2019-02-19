<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class BotDialogGroup
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $description
 * @property string|null $developerName
 * @property string|null $label
 */
class BotDialogGroup
{
    public static $classMap = [
    ];

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setDeveloperName(string $developerName)
    {
        $this->developerName = $developerName;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }
}

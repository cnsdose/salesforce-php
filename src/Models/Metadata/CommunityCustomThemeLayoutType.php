<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CommunityCustomThemeLayoutType
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $description
 * @property string|null $label
 */
class CommunityCustomThemeLayoutType
{
    public static $classMap = [
    ];

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }
}

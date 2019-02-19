<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class WebLinkTranslation
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $label
 * @property string|null $name
 */
class WebLinkTranslation
{
    public static $classMap = [
    ];

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }
}

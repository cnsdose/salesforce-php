<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ObjectLinkingSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableObjectLinking
 */
class ObjectLinkingSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEnableObjectLinking(bool $enableObjectLinking)
    {
        $this->enableObjectLinking = $enableObjectLinking;
    }
}

<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class NameSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableMiddleName
 * @property bool|null $enableNameSuffix
 */
class NameSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEnableMiddleName(bool $enableMiddleName)
    {
        $this->enableMiddleName = $enableMiddleName;
    }

    public function setEnableNameSuffix(bool $enableNameSuffix)
    {
        $this->enableNameSuffix = $enableNameSuffix;
    }
}

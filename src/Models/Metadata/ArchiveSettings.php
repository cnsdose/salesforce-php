<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ArchiveSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableEntityArchivingEnabled
 */
class ArchiveSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEnableEntityArchivingEnabled(bool $enableEntityArchivingEnabled)
    {
        $this->enableEntityArchivingEnabled = $enableEntityArchivingEnabled;
    }
}

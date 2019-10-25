<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ExperienceBundleSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableExperienceBundleMetadata
 */
class ExperienceBundleSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEnableExperienceBundleMetadata(bool $enableExperienceBundleMetadata)
    {
        $this->enableExperienceBundleMetadata = $enableExperienceBundleMetadata;
    }
}

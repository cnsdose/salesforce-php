<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class describeMetadata
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property float|null $asOfVersion
 */
class describeMetadata
{
    public static $classMap = [
    ];

    public function setAsOfVersion(float $asOfVersion)
    {
        $this->asOfVersion = $asOfVersion;
    }
}

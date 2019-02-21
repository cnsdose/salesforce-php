<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class DescribeMetadata
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property float|null $asOfVersion
 */
class DescribeMetadata
{
    public static $classMap = [
    ];

    public function setAsOfVersion(float $asOfVersion)
    {
        $this->asOfVersion = $asOfVersion;
    }
}

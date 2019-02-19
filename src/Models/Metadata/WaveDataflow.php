<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class WaveDataflow
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $dataflowType
 * @property string|null $description
 * @property string|null $masterLabel
 */
class WaveDataflow extends MetadataWithContent
{
    public static $classMap = [
    ];

    public function setDataflowType(string $dataflowType)
    {
        $this->dataflowType = $dataflowType;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }
}

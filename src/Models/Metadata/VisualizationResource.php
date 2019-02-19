<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class VisualizationResource
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $description
 * @property string|null $file
 * @property int|null $rank
 * @property string|null $type
 */
class VisualizationResource
{
    public static $classMap = [
    ];

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setFile(string $file)
    {
        $this->file = $file;
    }

    public function setRank(int $rank)
    {
        $this->rank = $rank;
    }

    public function setType(VisualizationResourceType $type)
    {
        $this->type = $type->getValue();
    }
}

<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FlowDefinition
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property int|null $activeVersionNumber
 * @property string|null $description
 * @property string|null $masterLabel
 */
class FlowDefinition extends Metadata
{
    public static $classMap = [
    ];

    public function setActiveVersionNumber(int $activeVersionNumber)
    {
        $this->activeVersionNumber = $activeVersionNumber;
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

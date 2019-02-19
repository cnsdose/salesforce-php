<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FlexiPageRegion
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $appendable
 * @property ComponentInstance[]|null $componentInstances
 * @property string|null $mode
 * @property string|null $name
 * @property string|null $prependable
 * @property string|null $replaceable
 * @property string|null $type
 */
class FlexiPageRegion
{
    public static $classMap = [
        'componentInstances' => [
            'multiple' => true,
            'type' => ComponentInstance::class,
        ],
    ];

    public function setAppendable(RegionFlagStatus $appendable)
    {
        $this->appendable = $appendable->getValue();
    }

    public function setComponentInstances(array $componentInstances)
    {
        $this->componentInstances = $componentInstances;
    }

    public function setMode(FlexiPageRegionMode $mode)
    {
        $this->mode = $mode->getValue();
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setPrependable(RegionFlagStatus $prependable)
    {
        $this->prependable = $prependable->getValue();
    }

    public function setReplaceable(RegionFlagStatus $replaceable)
    {
        $this->replaceable = $replaceable->getValue();
    }

    public function setType(FlexiPageRegionType $type)
    {
        $this->type = $type->getValue();
    }
}

<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class LightningBoltFeatures
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $description
 * @property int|null $order
 * @property string|null $title
 */
class LightningBoltFeatures
{
    public static $classMap = [
    ];

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setOrder(int $order)
    {
        $this->order = $order;
    }

    public function setTitle(string $title)
    {
        $this->title = $title;
    }
}

<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CommunityTemplateBundleInfo
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $description
 * @property string|null $image
 * @property int|null $order
 * @property string|null $title
 * @property string|null $type
 */
class CommunityTemplateBundleInfo
{
    public static $classMap = [
    ];

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setImage(string $image)
    {
        $this->image = $image;
    }

    public function setOrder(int $order)
    {
        $this->order = $order;
    }

    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    public function setType(CommunityTemplateBundleInfoType $type)
    {
        $this->type = $type->getValue();
    }
}

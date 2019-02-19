<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class LightningBolt
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $category
 * @property LightningBoltFeatures[]|null $lightningBoltFeatures
 * @property LightningBoltImages[]|null $lightningBoltImages
 * @property LightningBoltItems[]|null $lightningBoltItems
 * @property string|null $masterLabel
 * @property string|null $publisher
 * @property string|null $summary
 */
class LightningBolt extends Metadata
{
    public static $classMap = [
        'lightningBoltFeatures' => [
            'multiple' => true,
            'type' => LightningBoltFeatures::class,
        ],
        'lightningBoltImages' => [
            'multiple' => true,
            'type' => LightningBoltImages::class,
        ],
        'lightningBoltItems' => [
            'multiple' => true,
            'type' => LightningBoltItems::class,
        ],
    ];

    public function setCategory(LightningBoltCategory $category)
    {
        $this->category = $category->getValue();
    }

    public function setLightningBoltFeatures(array $lightningBoltFeatures)
    {
        $this->lightningBoltFeatures = $lightningBoltFeatures;
    }

    public function setLightningBoltImages(array $lightningBoltImages)
    {
        $this->lightningBoltImages = $lightningBoltImages;
    }

    public function setLightningBoltItems(array $lightningBoltItems)
    {
        $this->lightningBoltItems = $lightningBoltItems;
    }

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }

    public function setPublisher(string $publisher)
    {
        $this->publisher = $publisher;
    }

    public function setSummary(string $summary)
    {
        $this->summary = $summary;
    }
}

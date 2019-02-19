<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ReputationBranding
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $smallImage
 */
class ReputationBranding
{
    public static $classMap = [
    ];

    public function setSmallImage(string $smallImage)
    {
        $this->smallImage = $smallImage;
    }
}

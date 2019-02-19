<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class MlIntentUtterance
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $utterance
 */
class MlIntentUtterance
{
    public static $classMap = [
    ];

    public function setUtterance(string $utterance)
    {
        $this->utterance = $utterance;
    }
}

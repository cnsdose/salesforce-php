<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class DiscoverySettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableEinsteinAnswersPref
 */
class DiscoverySettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEnableEinsteinAnswersPref(bool $enableEinsteinAnswersPref)
    {
        $this->enableEinsteinAnswersPref = $enableEinsteinAnswersPref;
    }
}

<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class IsvHammerSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableIsvHammerSubIsOptedOut
 */
class IsvHammerSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEnableIsvHammerSubIsOptedOut(bool $enableIsvHammerSubIsOptedOut)
    {
        $this->enableIsvHammerSubIsOptedOut = $enableIsvHammerSubIsOptedOut;
    }
}

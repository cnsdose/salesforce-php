<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class EncryptionKeySettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $canOptOutOfDerivationWithBYOK
 * @property bool|null $enableCacheOnlyKeys
 * @property bool|null $enableReplayDetection
 */
class EncryptionKeySettings extends Metadata
{
    public static $classMap = [
    ];

    public function setCanOptOutOfDerivationWithBYOK(bool $canOptOutOfDerivationWithBYOK)
    {
        $this->canOptOutOfDerivationWithBYOK = $canOptOutOfDerivationWithBYOK;
    }

    public function setEnableCacheOnlyKeys(bool $enableCacheOnlyKeys)
    {
        $this->enableCacheOnlyKeys = $enableCacheOnlyKeys;
    }

    public function setEnableReplayDetection(bool $enableReplayDetection)
    {
        $this->enableReplayDetection = $enableReplayDetection;
    }
}

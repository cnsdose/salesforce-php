<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class BlockchainSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableBcp
 * @property bool|null $enableBcpCoin
 */
class BlockchainSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEnableBcp(bool $enableBcp)
    {
        $this->enableBcp = $enableBcp;
    }

    public function setEnableBcpCoin(bool $enableBcpCoin)
    {
        $this->enableBcpCoin = $enableBcpCoin;
    }
}

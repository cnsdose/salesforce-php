<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class EmbeddedServiceFlow
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $flow
 * @property string|null $flowType
 * @property bool|null $isAuthenticationRequired
 */
class EmbeddedServiceFlow
{
    public static $classMap = [
    ];

    public function setFlow(string $flow)
    {
        $this->flow = $flow;
    }

    public function setFlowType(EmbeddedServiceFlowType $flowType)
    {
        $this->flowType = $flowType->getValue();
    }

    public function setIsAuthenticationRequired(bool $isAuthenticationRequired)
    {
        $this->isAuthenticationRequired = $isAuthenticationRequired;
    }
}

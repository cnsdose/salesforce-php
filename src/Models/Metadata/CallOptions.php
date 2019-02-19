<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CallOptions
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $client
 */
class CallOptions
{
    public static $classMap = [
    ];

    public function setClient(string $client)
    {
        $this->client = $client;
    }
}

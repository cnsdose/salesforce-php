<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class DeployResponse
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property AsyncResult|null $result
 */
class DeployResponse
{
    public static $classMap = [
        'result' => [
            'multiple' => false,
            'type' => AsyncResult::class,
        ],
    ];

    public function setResult(AsyncResult $result)
    {
        $this->result = $result;
    }
}

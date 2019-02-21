<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CancelDeployResponse
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property CancelDeployResult|null $result
 */
class CancelDeployResponse
{
    public static $classMap = [
        'result' => [
            'multiple' => false,
            'type' => CancelDeployResult::class,
        ],
    ];

    public function setResult(CancelDeployResult $result)
    {
        $this->result = $result;
    }
}

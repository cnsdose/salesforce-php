<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CheckDeployStatusResponse
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property DeployResult|null $result
 */
class CheckDeployStatusResponse
{
    public static $classMap = [
        'result' => [
            'multiple' => false,
            'type' => DeployResult::class,
        ],
    ];

    public function setResult(DeployResult $result)
    {
        $this->result = $result;
    }
}

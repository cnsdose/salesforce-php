<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class cancelDeployResponse
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property CancelDeployResult|null $result
 */
class cancelDeployResponse
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

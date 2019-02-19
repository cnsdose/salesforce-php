<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class retrieveResponse
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property AsyncResult|null $result
 */
class retrieveResponse
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

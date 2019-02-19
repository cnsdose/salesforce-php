<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class deployResponse
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property AsyncResult|null $result
 */
class deployResponse
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

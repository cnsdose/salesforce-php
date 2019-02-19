<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class checkRetrieveStatusResponse
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property RetrieveResult|null $result
 */
class checkRetrieveStatusResponse
{
    public static $classMap = [
        'result' => [
            'multiple' => false,
            'type' => RetrieveResult::class,
        ],
    ];

    public function setResult(RetrieveResult $result)
    {
        $this->result = $result;
    }
}

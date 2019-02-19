<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class readMetadataResponse
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property ReadResult|null $result
 */
class readMetadataResponse
{
    public static $classMap = [
        'result' => [
            'multiple' => false,
            'type' => ReadResult::class,
        ],
    ];

    public function setResult(ReadResult $result)
    {
        $this->result = $result;
    }
}

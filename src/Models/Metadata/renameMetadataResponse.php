<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class renameMetadataResponse
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property SaveResult|null $result
 */
class renameMetadataResponse
{
    public static $classMap = [
        'result' => [
            'multiple' => false,
            'type' => SaveResult::class,
        ],
    ];

    public function setResult(SaveResult $result)
    {
        $this->result = $result;
    }
}
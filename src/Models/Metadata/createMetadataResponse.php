<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class createMetadataResponse
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property SaveResult[]|null $result
 */
class createMetadataResponse
{
    public static $classMap = [
        'result' => [
            'multiple' => true,
            'type' => SaveResult::class,
        ],
    ];

    public function setResult(array $result)
    {
        $this->result = $result;
    }
}

<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class listMetadataResponse
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property FileProperties[]|null $result
 */
class listMetadataResponse
{
    public static $classMap = [
        'result' => [
            'multiple' => true,
            'type' => FileProperties::class,
        ],
    ];

    public function setResult(array $result)
    {
        $this->result = $result;
    }
}

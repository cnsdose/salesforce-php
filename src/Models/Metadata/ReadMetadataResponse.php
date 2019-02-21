<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ReadMetadataResponse
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property ReadResult|null $result
 */
class ReadMetadataResponse
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

<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class deleteMetadataResponse
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property DeleteResult[]|null $result
 */
class deleteMetadataResponse
{
    public static $classMap = [
        'result' => [
            'multiple' => true,
            'type' => DeleteResult::class,
        ],
    ];

    public function setResult(array $result)
    {
        $this->result = $result;
    }
}

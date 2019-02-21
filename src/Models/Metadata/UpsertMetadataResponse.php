<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class UpsertMetadataResponse
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property UpsertResult[]|null $result
 */
class UpsertMetadataResponse
{
    public static $classMap = [
        'result' => [
            'multiple' => true,
            'type' => UpsertResult::class,
        ],
    ];

    public function setResult(array $result)
    {
        $this->result = $result;
    }
}

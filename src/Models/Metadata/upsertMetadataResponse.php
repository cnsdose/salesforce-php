<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class upsertMetadataResponse
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property UpsertResult[]|null $result
 */
class upsertMetadataResponse
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

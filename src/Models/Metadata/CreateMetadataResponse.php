<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CreateMetadataResponse
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property SaveResult[]|null $result
 */
class CreateMetadataResponse
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

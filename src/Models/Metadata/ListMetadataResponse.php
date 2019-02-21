<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ListMetadataResponse
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property FileProperties[]|null $result
 */
class ListMetadataResponse
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

<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class RenameMetadataResponse
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property SaveResult|null $result
 */
class RenameMetadataResponse
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

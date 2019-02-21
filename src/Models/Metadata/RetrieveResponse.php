<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class RetrieveResponse
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property AsyncResult|null $result
 */
class RetrieveResponse
{
    public static $classMap = [
        'result' => [
            'multiple' => false,
            'type' => AsyncResult::class,
        ],
    ];

    public function setResult(AsyncResult $result)
    {
        $this->result = $result;
    }
}

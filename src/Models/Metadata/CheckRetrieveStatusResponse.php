<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CheckRetrieveStatusResponse
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property RetrieveResult|null $result
 */
class CheckRetrieveStatusResponse
{
    public static $classMap = [
        'result' => [
            'multiple' => false,
            'type' => RetrieveResult::class,
        ],
    ];

    public function setResult(RetrieveResult $result)
    {
        $this->result = $result;
    }
}

<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class DescribeValueTypeResponse
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property DescribeValueTypeResult|null $result
 */
class DescribeValueTypeResponse
{
    public static $classMap = [
        'result' => [
            'multiple' => false,
            'type' => DescribeValueTypeResult::class,
        ],
    ];

    public function setResult(DescribeValueTypeResult $result)
    {
        $this->result = $result;
    }
}

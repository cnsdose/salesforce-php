<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class describeValueTypeResponse
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property DescribeValueTypeResult|null $result
 */
class describeValueTypeResponse
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

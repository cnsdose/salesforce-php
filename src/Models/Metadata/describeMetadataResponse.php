<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class describeMetadataResponse
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property DescribeMetadataResult|null $result
 */
class describeMetadataResponse
{
    public static $classMap = [
        'result' => [
            'multiple' => false,
            'type' => DescribeMetadataResult::class,
        ],
    ];

    public function setResult(DescribeMetadataResult $result)
    {
        $this->result = $result;
    }
}

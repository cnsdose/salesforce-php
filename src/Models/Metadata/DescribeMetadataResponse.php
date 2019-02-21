<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class DescribeMetadataResponse
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property DescribeMetadataResult|null $result
 */
class DescribeMetadataResponse
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

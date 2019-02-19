<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ReadResult
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property Metadata[]|null $records
 */
class ReadResult
{
    public static $classMap = [
        'records' => [
            'multiple' => true,
            'type' => Metadata::class,
        ],
    ];

    public function setRecords(array $records)
    {
        $this->records = $records;
    }
}

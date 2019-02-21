<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ListMetadata
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property ListMetadataQuery[]|null $queries
 * @property float|null $asOfVersion
 */
class ListMetadata
{
    public static $classMap = [
        'queries' => [
            'multiple' => true,
            'type' => ListMetadataQuery::class,
        ],
    ];

    public function setQueries(array $queries)
    {
        $this->queries = $queries;
    }

    public function setAsOfVersion(float $asOfVersion)
    {
        $this->asOfVersion = $asOfVersion;
    }
}

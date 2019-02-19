<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class DescribeMetadataResult
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property DescribeMetadataObject[]|null $metadataObjects
 * @property string|null $organizationNamespace
 * @property bool|null $partialSaveAllowed
 * @property bool|null $testRequired
 */
class DescribeMetadataResult
{
    public static $classMap = [
        'metadataObjects' => [
            'multiple' => true,
            'type' => DescribeMetadataObject::class,
        ],
    ];

    public function setMetadataObjects(array $metadataObjects)
    {
        $this->metadataObjects = $metadataObjects;
    }

    public function setOrganizationNamespace(string $organizationNamespace)
    {
        $this->organizationNamespace = $organizationNamespace;
    }

    public function setPartialSaveAllowed(bool $partialSaveAllowed)
    {
        $this->partialSaveAllowed = $partialSaveAllowed;
    }

    public function setTestRequired(bool $testRequired)
    {
        $this->testRequired = $testRequired;
    }
}

<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class DescribeMetadataObject
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string[]|null $childXmlNames
 * @property string|null $directoryName
 * @property bool|null $inFolder
 * @property bool|null $metaFile
 * @property string|null $suffix
 * @property string|null $xmlName
 */
class DescribeMetadataObject
{
    public static $classMap = [
    ];

    public function setChildXmlNames(array $childXmlNames)
    {
        $this->childXmlNames = $childXmlNames;
    }

    public function setDirectoryName(string $directoryName)
    {
        $this->directoryName = $directoryName;
    }

    public function setInFolder(bool $inFolder)
    {
        $this->inFolder = $inFolder;
    }

    public function setMetaFile(bool $metaFile)
    {
        $this->metaFile = $metaFile;
    }

    public function setSuffix(string $suffix)
    {
        $this->suffix = $suffix;
    }

    public function setXmlName(string $xmlName)
    {
        $this->xmlName = $xmlName;
    }
}

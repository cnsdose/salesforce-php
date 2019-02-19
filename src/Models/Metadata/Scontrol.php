<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class Scontrol
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $contentSource
 * @property string|null $description
 * @property string|null $encodingKey
 * @property string|null $fileContent
 * @property string|null $fileName
 * @property string|null $name
 * @property bool|null $supportsCaching
 */
class Scontrol extends MetadataWithContent
{
    public static $classMap = [
    ];

    public function setContentSource(SControlContentSource $contentSource)
    {
        $this->contentSource = $contentSource->getValue();
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setEncodingKey(Encoding $encodingKey)
    {
        $this->encodingKey = $encodingKey->getValue();
    }

    public function setFileContent(string $fileContent)
    {
        $this->fileContent = $fileContent;
    }

    public function setFileName(string $fileName)
    {
        $this->fileName = $fileName;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setSupportsCaching(bool $supportsCaching)
    {
        $this->supportsCaching = $supportsCaching;
    }
}

<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class TopicsForObjects
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableTopics
 * @property string|null $entityApiName
 */
class TopicsForObjects extends Metadata
{
    public static $classMap = [
    ];

    public function setEnableTopics(bool $enableTopics)
    {
        $this->enableTopics = $enableTopics;
    }

    public function setEntityApiName(string $entityApiName)
    {
        $this->entityApiName = $entityApiName;
    }
}

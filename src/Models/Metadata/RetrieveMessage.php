<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class RetrieveMessage
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $fileName
 * @property string|null $problem
 */
class RetrieveMessage
{
    public static $classMap = [
    ];

    public function setFileName(string $fileName)
    {
        $this->fileName = $fileName;
    }

    public function setProblem(string $problem)
    {
        $this->problem = $problem;
    }
}

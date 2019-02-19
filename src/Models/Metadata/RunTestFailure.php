<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class RunTestFailure
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property ID|null $id
 * @property string|null $message
 * @property string|null $methodName
 * @property string|null $name
 * @property string|null $namespace
 * @property string|null $packageName
 * @property bool|null $seeAllData
 * @property string|null $stackTrace
 * @property float|null $time
 * @property string|null $type
 */
class RunTestFailure
{
    public static $classMap = [
    ];

    public function setId(ID $id)
    {
        $this->id = $id;
    }

    public function setMessage(string $message)
    {
        $this->message = $message;
    }

    public function setMethodName(string $methodName)
    {
        $this->methodName = $methodName;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setNamespace(string $namespace)
    {
        $this->namespace = $namespace;
    }

    public function setPackageName(string $packageName)
    {
        $this->packageName = $packageName;
    }

    public function setSeeAllData(bool $seeAllData)
    {
        $this->seeAllData = $seeAllData;
    }

    public function setStackTrace(string $stackTrace)
    {
        $this->stackTrace = $stackTrace;
    }

    public function setTime(float $time)
    {
        $this->time = $time;
    }

    public function setType(string $type)
    {
        $this->type = $type;
    }
}

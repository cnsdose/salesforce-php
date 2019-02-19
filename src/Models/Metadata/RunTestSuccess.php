<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class RunTestSuccess
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property ID|null $id
 * @property string|null $methodName
 * @property string|null $name
 * @property string|null $namespace
 * @property bool|null $seeAllData
 * @property float|null $time
 */
class RunTestSuccess
{
    public static $classMap = [
    ];

    public function setId(ID $id)
    {
        $this->id = $id;
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

    public function setSeeAllData(bool $seeAllData)
    {
        $this->seeAllData = $seeAllData;
    }

    public function setTime(float $time)
    {
        $this->time = $time;
    }
}

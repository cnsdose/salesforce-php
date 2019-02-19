<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CancelDeployResult
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $done
 * @property ID|null $id
 */
class CancelDeployResult
{
    public static $classMap = [
    ];

    public function setDone(bool $done)
    {
        $this->done = $done;
    }

    public function setId(ID $id)
    {
        $this->id = $id;
    }
}
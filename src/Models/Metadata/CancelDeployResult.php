<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CancelDeployResult
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $done
 * @property string|null $id
 */
class CancelDeployResult
{
    public static $classMap = [
    ];

    public function setDone(bool $done)
    {
        $this->done = $done;
    }

    public function setId(string $id)
    {
        $this->id = $id;
    }
}

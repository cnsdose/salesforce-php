<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class checkRetrieveStatus
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property ID|null $asyncProcessId
 * @property bool|null $includeZip
 */
class checkRetrieveStatus
{
    public static $classMap = [
    ];

    public function setAsyncProcessId(ID $asyncProcessId)
    {
        $this->asyncProcessId = $asyncProcessId;
    }

    public function setIncludeZip(bool $includeZip)
    {
        $this->includeZip = $includeZip;
    }
}

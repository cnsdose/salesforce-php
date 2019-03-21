<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CheckRetrieveStatus
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $asyncProcessId
 * @property bool|null $includeZip
 */
class CheckRetrieveStatus
{
    public static $classMap = [
    ];

    public function setAsyncProcessId(string $asyncProcessId)
    {
        $this->asyncProcessId = $asyncProcessId;
    }

    public function setIncludeZip(bool $includeZip)
    {
        $this->includeZip = $includeZip;
    }
}

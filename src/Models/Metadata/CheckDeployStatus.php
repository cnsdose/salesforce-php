<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CheckDeployStatus
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $asyncProcessId
 * @property bool|null $includeDetails
 */
class CheckDeployStatus
{
    public static $classMap = [
    ];

    public function setAsyncProcessId(string $asyncProcessId)
    {
        $this->asyncProcessId = $asyncProcessId;
    }

    public function setIncludeDetails(bool $includeDetails)
    {
        $this->includeDetails = $includeDetails;
    }
}

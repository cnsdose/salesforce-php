<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class checkDeployStatus
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property ID|null $asyncProcessId
 * @property bool|null $includeDetails
 */
class checkDeployStatus
{
    public static $classMap = [
    ];

    public function setAsyncProcessId(ID $asyncProcessId)
    {
        $this->asyncProcessId = $asyncProcessId;
    }

    public function setIncludeDetails(bool $includeDetails)
    {
        $this->includeDetails = $includeDetails;
    }
}

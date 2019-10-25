<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class TimeSheetTemplateAssignment
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $assignedTo
 */
class TimeSheetTemplateAssignment
{
    public static $classMap = [
    ];

    public function setAssignedTo(string $assignedTo)
    {
        $this->assignedTo = $assignedTo;
    }
}

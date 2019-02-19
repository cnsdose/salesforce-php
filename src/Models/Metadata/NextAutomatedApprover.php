<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class NextAutomatedApprover
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $useApproverFieldOfRecordOwner
 * @property string|null $userHierarchyField
 */
class NextAutomatedApprover
{
    public static $classMap = [
    ];

    public function setUseApproverFieldOfRecordOwner(bool $useApproverFieldOfRecordOwner)
    {
        $this->useApproverFieldOfRecordOwner = $useApproverFieldOfRecordOwner;
    }

    public function setUserHierarchyField(string $userHierarchyField)
    {
        $this->userHierarchyField = $userHierarchyField;
    }
}

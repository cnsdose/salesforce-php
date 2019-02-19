<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ApprovalSubmitter
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $submitter
 * @property string|null $type
 */
class ApprovalSubmitter
{
    public static $classMap = [
    ];

    public function setSubmitter(string $submitter)
    {
        $this->submitter = $submitter;
    }

    public function setType(ProcessSubmitterType $type)
    {
        $this->type = $type->getValue();
    }
}

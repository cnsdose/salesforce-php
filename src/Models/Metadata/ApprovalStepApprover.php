<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ApprovalStepApprover
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property Approver[]|null $approver
 * @property string|null $whenMultipleApprovers
 */
class ApprovalStepApprover
{
    public static $classMap = [
        'approver' => [
            'multiple' => true,
            'type' => Approver::class,
        ],
    ];

    public function setApprover(array $approver)
    {
        $this->approver = $approver;
    }

    public function setWhenMultipleApprovers(RoutingType $whenMultipleApprovers)
    {
        $this->whenMultipleApprovers = $whenMultipleApprovers->getValue();
    }
}

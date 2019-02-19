<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class DeployDetails
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property DeployMessage[]|null $componentFailures
 * @property DeployMessage[]|null $componentSuccesses
 * @property RetrieveResult|null $retrieveResult
 * @property RunTestsResult|null $runTestResult
 */
class DeployDetails
{
    public static $classMap = [
        'componentFailures' => [
            'multiple' => true,
            'type' => DeployMessage::class,
        ],
        'componentSuccesses' => [
            'multiple' => true,
            'type' => DeployMessage::class,
        ],
        'retrieveResult' => [
            'multiple' => false,
            'type' => RetrieveResult::class,
        ],
        'runTestResult' => [
            'multiple' => false,
            'type' => RunTestsResult::class,
        ],
    ];

    public function setComponentFailures(array $componentFailures)
    {
        $this->componentFailures = $componentFailures;
    }

    public function setComponentSuccesses(array $componentSuccesses)
    {
        $this->componentSuccesses = $componentSuccesses;
    }

    public function setRetrieveResult(RetrieveResult $retrieveResult)
    {
        $this->retrieveResult = $retrieveResult;
    }

    public function setRunTestResult(RunTestsResult $runTestResult)
    {
        $this->runTestResult = $runTestResult;
    }
}

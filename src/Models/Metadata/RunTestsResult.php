<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class RunTestsResult
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $apexLogId
 * @property CodeCoverageResult[]|null $codeCoverage
 * @property CodeCoverageWarning[]|null $codeCoverageWarnings
 * @property RunTestFailure[]|null $failures
 * @property FlowCoverageResult[]|null $flowCoverage
 * @property FlowCoverageWarning[]|null $flowCoverageWarnings
 * @property int|null $numFailures
 * @property int|null $numTestsRun
 * @property RunTestSuccess[]|null $successes
 * @property float|null $totalTime
 */
class RunTestsResult
{
    public static $classMap = [
        'codeCoverage' => [
            'multiple' => true,
            'type' => CodeCoverageResult::class,
        ],
        'codeCoverageWarnings' => [
            'multiple' => true,
            'type' => CodeCoverageWarning::class,
        ],
        'failures' => [
            'multiple' => true,
            'type' => RunTestFailure::class,
        ],
        'flowCoverage' => [
            'multiple' => true,
            'type' => FlowCoverageResult::class,
        ],
        'flowCoverageWarnings' => [
            'multiple' => true,
            'type' => FlowCoverageWarning::class,
        ],
        'successes' => [
            'multiple' => true,
            'type' => RunTestSuccess::class,
        ],
    ];

    public function setApexLogId(string $apexLogId)
    {
        $this->apexLogId = $apexLogId;
    }

    public function setCodeCoverage(array $codeCoverage)
    {
        $this->codeCoverage = $codeCoverage;
    }

    public function setCodeCoverageWarnings(array $codeCoverageWarnings)
    {
        $this->codeCoverageWarnings = $codeCoverageWarnings;
    }

    public function setFailures(array $failures)
    {
        $this->failures = $failures;
    }

    public function setFlowCoverage(array $flowCoverage)
    {
        $this->flowCoverage = $flowCoverage;
    }

    public function setFlowCoverageWarnings(array $flowCoverageWarnings)
    {
        $this->flowCoverageWarnings = $flowCoverageWarnings;
    }

    public function setNumFailures(int $numFailures)
    {
        $this->numFailures = $numFailures;
    }

    public function setNumTestsRun(int $numTestsRun)
    {
        $this->numTestsRun = $numTestsRun;
    }

    public function setSuccesses(array $successes)
    {
        $this->successes = $successes;
    }

    public function setTotalTime(float $totalTime)
    {
        $this->totalTime = $totalTime;
    }
}

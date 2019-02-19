<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class DeployOptions
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $allowMissingFiles
 * @property bool|null $autoUpdatePackage
 * @property bool|null $checkOnly
 * @property bool|null $ignoreWarnings
 * @property bool|null $performRetrieve
 * @property bool|null $purgeOnDelete
 * @property bool|null $rollbackOnError
 * @property string[]|null $runTests
 * @property bool|null $singlePackage
 * @property string|null $testLevel
 */
class DeployOptions
{
    public static $classMap = [
    ];

    public function setAllowMissingFiles(bool $allowMissingFiles)
    {
        $this->allowMissingFiles = $allowMissingFiles;
    }

    public function setAutoUpdatePackage(bool $autoUpdatePackage)
    {
        $this->autoUpdatePackage = $autoUpdatePackage;
    }

    public function setCheckOnly(bool $checkOnly)
    {
        $this->checkOnly = $checkOnly;
    }

    public function setIgnoreWarnings(bool $ignoreWarnings)
    {
        $this->ignoreWarnings = $ignoreWarnings;
    }

    public function setPerformRetrieve(bool $performRetrieve)
    {
        $this->performRetrieve = $performRetrieve;
    }

    public function setPurgeOnDelete(bool $purgeOnDelete)
    {
        $this->purgeOnDelete = $purgeOnDelete;
    }

    public function setRollbackOnError(bool $rollbackOnError)
    {
        $this->rollbackOnError = $rollbackOnError;
    }

    public function setRunTests(array $runTests)
    {
        $this->runTests = $runTests;
    }

    public function setSinglePackage(bool $singlePackage)
    {
        $this->singlePackage = $singlePackage;
    }

    public function setTestLevel(TestLevel $testLevel)
    {
        $this->testLevel = $testLevel->getValue();
    }
}

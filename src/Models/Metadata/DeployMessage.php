<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class DeployMessage
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $changed
 * @property int|null $columnNumber
 * @property string|null $componentType
 * @property bool|null $created
 * @property string|null $createdDate
 * @property bool|null $deleted
 * @property string|null $fileName
 * @property string|null $fullName
 * @property string|null $id
 * @property int|null $lineNumber
 * @property string|null $problem
 * @property string|null $problemType
 * @property bool|null $success
 */
class DeployMessage
{
    public static $classMap = [
    ];

    public function setChanged(bool $changed)
    {
        $this->changed = $changed;
    }

    public function setColumnNumber(int $columnNumber)
    {
        $this->columnNumber = $columnNumber;
    }

    public function setComponentType(string $componentType)
    {
        $this->componentType = $componentType;
    }

    public function setCreated(bool $created)
    {
        $this->created = $created;
    }

    public function setCreatedDate(string $createdDate)
    {
        $this->createdDate = $createdDate;
    }

    public function setDeleted(bool $deleted)
    {
        $this->deleted = $deleted;
    }

    public function setFileName(string $fileName)
    {
        $this->fileName = $fileName;
    }

    public function setFullName(string $fullName)
    {
        $this->fullName = $fullName;
    }

    public function setId(string $id)
    {
        $this->id = $id;
    }

    public function setLineNumber(int $lineNumber)
    {
        $this->lineNumber = $lineNumber;
    }

    public function setProblem(string $problem)
    {
        $this->problem = $problem;
    }

    public function setProblemType(DeployProblemType $problemType)
    {
        $this->problemType = $problemType->getValue();
    }

    public function setSuccess(bool $success)
    {
        $this->success = $success;
    }
}

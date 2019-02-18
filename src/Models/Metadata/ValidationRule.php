<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 15/02/19
 * Time: 4:09 PM
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ValidationRule
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $fullName
 * @property bool|null $active
 * @property string|null $description
 * @property string|null $errorConditionFormula
 * @property string|null $errorDisplayField
 * @property string|null $errorMessage
 */
class ValidationRule
{
    public function setFullName(string $fullName)
    {
        $this->fullName = $fullName;
    }

    public function setActive(bool $active)
    {
        $this->active = $active;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setErrorConditionFormula(string $errorConditionFormula)
    {
        $this->errorConditionFormula = $errorConditionFormula;
    }

    public function setErrorDisplayField(string $errorDisplayField)
    {
        $this->errorDisplayField = $errorDisplayField;
    }

    public function setErrorMessage(string $errorMessage)
    {
        $this->errorMessage = $errorMessage;
    }
}

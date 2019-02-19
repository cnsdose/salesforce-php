<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ValidationRule
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $active
 * @property string|null $description
 * @property string|null $errorConditionFormula
 * @property string|null $errorDisplayField
 * @property string|null $errorMessage
 */
class ValidationRule extends Metadata
{
    public static $classMap = [
    ];

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

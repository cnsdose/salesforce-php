<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ValidationRuleTranslation
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $errorMessage
 * @property string|null $name
 */
class ValidationRuleTranslation
{
    public static $classMap = [
    ];

    public function setErrorMessage(string $errorMessage)
    {
        $this->errorMessage = $errorMessage;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }
}

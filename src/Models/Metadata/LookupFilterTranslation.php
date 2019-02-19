<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class LookupFilterTranslation
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $errorMessage
 * @property string|null $informationalMessage
 */
class LookupFilterTranslation
{
    public static $classMap = [
    ];

    public function setErrorMessage(string $errorMessage)
    {
        $this->errorMessage = $errorMessage;
    }

    public function setInformationalMessage(string $informationalMessage)
    {
        $this->informationalMessage = $informationalMessage;
    }
}

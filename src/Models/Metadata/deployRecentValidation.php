<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class deployRecentValidation
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property ID|null $validationId
 */
class deployRecentValidation
{
    public static $classMap = [
    ];

    public function setValidationId(ID $validationId)
    {
        $this->validationId = $validationId;
    }
}

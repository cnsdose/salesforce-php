<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ExtendedErrorDetails
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $extendedErrorCode
 */
class ExtendedErrorDetails
{
    public static $classMap = [
    ];

    public function setExtendedErrorCode(ExtendedErrorCode $extendedErrorCode)
    {
        $this->extendedErrorCode = $extendedErrorCode->getValue();
    }
}

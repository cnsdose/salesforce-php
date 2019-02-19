<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class Error
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property ExtendedErrorDetails[]|null $extendedErrorDetails
 * @property string[]|null $fields
 * @property string|null $message
 * @property string|null $statusCode
 */
class Error
{
    public static $classMap = [
        'extendedErrorDetails' => [
            'multiple' => true,
            'type' => ExtendedErrorDetails::class,
        ],
    ];

    public function setExtendedErrorDetails(array $extendedErrorDetails)
    {
        $this->extendedErrorDetails = $extendedErrorDetails;
    }

    public function setFields(array $fields)
    {
        $this->fields = $fields;
    }

    public function setMessage(string $message)
    {
        $this->message = $message;
    }

    public function setStatusCode(StatusCode $statusCode)
    {
        $this->statusCode = $statusCode->getValue();
    }
}

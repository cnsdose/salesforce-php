<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class SaveResult
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property Error[]|null $errors
 * @property string|null $fullName
 * @property bool|null $success
 */
class SaveResult
{
    public static $classMap = [
        'errors' => [
            'multiple' => true,
            'type' => Error::class,
        ],
    ];

    public function setErrors(array $errors)
    {
        $this->errors = $errors;
    }

    public function setFullName(string $fullName)
    {
        $this->fullName = $fullName;
    }

    public function setSuccess(bool $success)
    {
        $this->success = $success;
    }
}

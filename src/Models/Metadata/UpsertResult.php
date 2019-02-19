<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class UpsertResult
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $created
 * @property Error[]|null $errors
 * @property string|null $fullName
 * @property bool|null $success
 */
class UpsertResult
{
    public static $classMap = [
        'errors' => [
            'multiple' => true,
            'type' => Error::class,
        ],
    ];

    public function setCreated(bool $created)
    {
        $this->created = $created;
    }

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

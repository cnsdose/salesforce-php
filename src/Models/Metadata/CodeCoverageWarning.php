<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CodeCoverageWarning
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property ID|null $id
 * @property string|null $message
 * @property string|null $name
 * @property string|null $namespace
 */
class CodeCoverageWarning
{
    public static $classMap = [
    ];

    public function setId(ID $id)
    {
        $this->id = $id;
    }

    public function setMessage(string $message)
    {
        $this->message = $message;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setNamespace(string $namespace)
    {
        $this->namespace = $namespace;
    }
}

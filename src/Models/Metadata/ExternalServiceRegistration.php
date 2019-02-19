<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ExternalServiceRegistration
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $description
 * @property string|null $label
 * @property string|null $namedCredential
 * @property string|null $schema
 * @property string|null $schemaType
 * @property string|null $schemaUrl
 * @property string|null $status
 */
class ExternalServiceRegistration extends Metadata
{
    public static $classMap = [
    ];

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setNamedCredential(string $namedCredential)
    {
        $this->namedCredential = $namedCredential;
    }

    public function setSchema(string $schema)
    {
        $this->schema = $schema;
    }

    public function setSchemaType(string $schemaType)
    {
        $this->schemaType = $schemaType;
    }

    public function setSchemaUrl(string $schemaUrl)
    {
        $this->schemaUrl = $schemaUrl;
    }

    public function setStatus(string $status)
    {
        $this->status = $status;
    }
}

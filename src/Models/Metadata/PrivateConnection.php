<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class PrivateConnection
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $description
 * @property string|null $direction
 * @property ExternalConnectionProperty[]|null $externalConnectionProperties
 * @property string|null $label
 * @property string|null $status
 * @property string|null $type
 */
class PrivateConnection extends Metadata
{
    public static $classMap = [
        'externalConnectionProperties' => [
            'multiple' => true,
            'type' => ExternalConnectionProperty::class,
        ],
    ];

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setDirection(PrivateConnectionDirection $direction)
    {
        $this->direction = $direction->getValue();
    }

    public function setExternalConnectionProperties(array $externalConnectionProperties)
    {
        $this->externalConnectionProperties = $externalConnectionProperties;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setStatus(PrivateConnectionStatus $status)
    {
        $this->status = $status->getValue();
    }

    public function setType(PrivateConnectionType $type)
    {
        $this->type = $type->getValue();
    }
}

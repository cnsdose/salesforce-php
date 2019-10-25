<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class LightningMessageChannel
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $description
 * @property bool|null $isExposed
 * @property LightningMessageField[]|null $lightningMessageFields
 * @property string|null $masterLabel
 */
class LightningMessageChannel extends Metadata
{
    public static $classMap = [
        'lightningMessageFields' => [
            'multiple' => true,
            'type' => LightningMessageField::class,
        ],
    ];

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setIsExposed(bool $isExposed)
    {
        $this->isExposed = $isExposed;
    }

    public function setLightningMessageFields(array $lightningMessageFields)
    {
        $this->lightningMessageFields = $lightningMessageFields;
    }

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }
}

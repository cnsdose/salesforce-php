<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class EmbeddedServiceFieldService
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $embeddedServiceConfig
 * @property bool|null $enabled
 * @property string|null $fieldServiceConfirmCardImg
 * @property string|null $fieldServiceHomeImg
 * @property string|null $fieldServiceLogoImg
 * @property string|null $masterLabel
 * @property bool|null $shouldShowExistingAppointment
 * @property bool|null $shouldShowNewAppointment
 */
class EmbeddedServiceFieldService extends Metadata
{
    public static $classMap = [
    ];

    public function setEmbeddedServiceConfig(string $embeddedServiceConfig)
    {
        $this->embeddedServiceConfig = $embeddedServiceConfig;
    }

    public function setEnabled(bool $enabled)
    {
        $this->enabled = $enabled;
    }

    public function setFieldServiceConfirmCardImg(string $fieldServiceConfirmCardImg)
    {
        $this->fieldServiceConfirmCardImg = $fieldServiceConfirmCardImg;
    }

    public function setFieldServiceHomeImg(string $fieldServiceHomeImg)
    {
        $this->fieldServiceHomeImg = $fieldServiceHomeImg;
    }

    public function setFieldServiceLogoImg(string $fieldServiceLogoImg)
    {
        $this->fieldServiceLogoImg = $fieldServiceLogoImg;
    }

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }

    public function setShouldShowExistingAppointment(bool $shouldShowExistingAppointment)
    {
        $this->shouldShowExistingAppointment = $shouldShowExistingAppointment;
    }

    public function setShouldShowNewAppointment(bool $shouldShowNewAppointment)
    {
        $this->shouldShowNewAppointment = $shouldShowNewAppointment;
    }
}

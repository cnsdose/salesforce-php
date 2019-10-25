<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class EmbeddedServiceAppointmentSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $appointmentConfirmImg
 * @property bool|null $enabled
 * @property string|null $homeImg
 * @property string|null $logoImg
 * @property bool|null $shouldShowExistingAppointment
 * @property bool|null $shouldShowNewAppointment
 */
class EmbeddedServiceAppointmentSettings
{
    public static $classMap = [
    ];

    public function setAppointmentConfirmImg(string $appointmentConfirmImg)
    {
        $this->appointmentConfirmImg = $appointmentConfirmImg;
    }

    public function setEnabled(bool $enabled)
    {
        $this->enabled = $enabled;
    }

    public function setHomeImg(string $homeImg)
    {
        $this->homeImg = $homeImg;
    }

    public function setLogoImg(string $logoImg)
    {
        $this->logoImg = $logoImg;
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

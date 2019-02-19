<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class EmbeddedServiceLayoutRule
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $appointmentStatus
 */
class EmbeddedServiceLayoutRule
{
    public static $classMap = [
    ];

    public function setAppointmentStatus(string $appointmentStatus)
    {
        $this->appointmentStatus = $appointmentStatus;
    }
}

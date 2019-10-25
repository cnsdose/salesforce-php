<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class AppointmentSchedulingPolicy
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $appointmentStartTimeInterval
 * @property string|null $masterLabel
 * @property bool|null $shouldConsiderCalendarEvents
 * @property bool|null $shouldEnforceExcludedResource
 * @property bool|null $shouldEnforceRequiredResource
 * @property bool|null $shouldMatchSkill
 * @property bool|null $shouldMatchSkillLevel
 * @property bool|null $shouldRespectVisitingHours
 * @property bool|null $shouldUsePrimaryMembers
 * @property bool|null $shouldUseSecondaryMembers
 */
class AppointmentSchedulingPolicy extends Metadata
{
    public static $classMap = [
    ];

    public function setAppointmentStartTimeInterval(string $appointmentStartTimeInterval)
    {
        $this->appointmentStartTimeInterval = $appointmentStartTimeInterval;
    }

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }

    public function setShouldConsiderCalendarEvents(bool $shouldConsiderCalendarEvents)
    {
        $this->shouldConsiderCalendarEvents = $shouldConsiderCalendarEvents;
    }

    public function setShouldEnforceExcludedResource(bool $shouldEnforceExcludedResource)
    {
        $this->shouldEnforceExcludedResource = $shouldEnforceExcludedResource;
    }

    public function setShouldEnforceRequiredResource(bool $shouldEnforceRequiredResource)
    {
        $this->shouldEnforceRequiredResource = $shouldEnforceRequiredResource;
    }

    public function setShouldMatchSkill(bool $shouldMatchSkill)
    {
        $this->shouldMatchSkill = $shouldMatchSkill;
    }

    public function setShouldMatchSkillLevel(bool $shouldMatchSkillLevel)
    {
        $this->shouldMatchSkillLevel = $shouldMatchSkillLevel;
    }

    public function setShouldRespectVisitingHours(bool $shouldRespectVisitingHours)
    {
        $this->shouldRespectVisitingHours = $shouldRespectVisitingHours;
    }

    public function setShouldUsePrimaryMembers(bool $shouldUsePrimaryMembers)
    {
        $this->shouldUsePrimaryMembers = $shouldUsePrimaryMembers;
    }

    public function setShouldUseSecondaryMembers(bool $shouldUseSecondaryMembers)
    {
        $this->shouldUseSecondaryMembers = $shouldUseSecondaryMembers;
    }
}

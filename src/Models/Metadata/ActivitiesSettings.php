<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ActivitiesSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $allowUsersToRelateMultipleContactsToTasksAndEvents
 * @property bool|null $autoRelateEventAttendees
 * @property bool|null $enableActivityReminders
 * @property bool|null $enableClickCreateEvents
 * @property bool|null $enableDragAndDropScheduling
 * @property bool|null $enableEmailTracking
 * @property bool|null $enableGroupTasks
 * @property bool|null $enableListViewScheduling
 * @property bool|null $enableLogNote
 * @property bool|null $enableMultidayEvents
 * @property bool|null $enableRecurringEvents
 * @property bool|null $enableRecurringTasks
 * @property bool|null $enableRollUpActivToContactsAcct
 * @property bool|null $enableSidebarCalendarShortcut
 * @property bool|null $enableSimpleTaskCreateUI
 * @property bool|null $enableUNSTaskDelegatedToNotifications
 * @property bool|null $enableUserListViewCalendars
 * @property string|null $meetingRequestsLogo
 * @property bool|null $showCustomLogoMeetingRequests
 * @property bool|null $showEventDetailsMultiUserCalendar
 * @property bool|null $showHomePageHoverLinksForEvents
 * @property bool|null $showMyTasksHoverLinks
 */
class ActivitiesSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setAllowUsersToRelateMultipleContactsToTasksAndEvents(bool $allowUsersToRelateMultipleContactsToTasksAndEvents)
    {
        $this->allowUsersToRelateMultipleContactsToTasksAndEvents = $allowUsersToRelateMultipleContactsToTasksAndEvents;
    }

    public function setAutoRelateEventAttendees(bool $autoRelateEventAttendees)
    {
        $this->autoRelateEventAttendees = $autoRelateEventAttendees;
    }

    public function setEnableActivityReminders(bool $enableActivityReminders)
    {
        $this->enableActivityReminders = $enableActivityReminders;
    }

    public function setEnableClickCreateEvents(bool $enableClickCreateEvents)
    {
        $this->enableClickCreateEvents = $enableClickCreateEvents;
    }

    public function setEnableDragAndDropScheduling(bool $enableDragAndDropScheduling)
    {
        $this->enableDragAndDropScheduling = $enableDragAndDropScheduling;
    }

    public function setEnableEmailTracking(bool $enableEmailTracking)
    {
        $this->enableEmailTracking = $enableEmailTracking;
    }

    public function setEnableGroupTasks(bool $enableGroupTasks)
    {
        $this->enableGroupTasks = $enableGroupTasks;
    }

    public function setEnableListViewScheduling(bool $enableListViewScheduling)
    {
        $this->enableListViewScheduling = $enableListViewScheduling;
    }

    public function setEnableLogNote(bool $enableLogNote)
    {
        $this->enableLogNote = $enableLogNote;
    }

    public function setEnableMultidayEvents(bool $enableMultidayEvents)
    {
        $this->enableMultidayEvents = $enableMultidayEvents;
    }

    public function setEnableRecurringEvents(bool $enableRecurringEvents)
    {
        $this->enableRecurringEvents = $enableRecurringEvents;
    }

    public function setEnableRecurringTasks(bool $enableRecurringTasks)
    {
        $this->enableRecurringTasks = $enableRecurringTasks;
    }

    public function setEnableRollUpActivToContactsAcct(bool $enableRollUpActivToContactsAcct)
    {
        $this->enableRollUpActivToContactsAcct = $enableRollUpActivToContactsAcct;
    }

    public function setEnableSidebarCalendarShortcut(bool $enableSidebarCalendarShortcut)
    {
        $this->enableSidebarCalendarShortcut = $enableSidebarCalendarShortcut;
    }

    public function setEnableSimpleTaskCreateUI(bool $enableSimpleTaskCreateUI)
    {
        $this->enableSimpleTaskCreateUI = $enableSimpleTaskCreateUI;
    }

    public function setEnableUNSTaskDelegatedToNotifications(bool $enableUNSTaskDelegatedToNotifications)
    {
        $this->enableUNSTaskDelegatedToNotifications = $enableUNSTaskDelegatedToNotifications;
    }

    public function setEnableUserListViewCalendars(bool $enableUserListViewCalendars)
    {
        $this->enableUserListViewCalendars = $enableUserListViewCalendars;
    }

    public function setMeetingRequestsLogo(string $meetingRequestsLogo)
    {
        $this->meetingRequestsLogo = $meetingRequestsLogo;
    }

    public function setShowCustomLogoMeetingRequests(bool $showCustomLogoMeetingRequests)
    {
        $this->showCustomLogoMeetingRequests = $showCustomLogoMeetingRequests;
    }

    public function setShowEventDetailsMultiUserCalendar(bool $showEventDetailsMultiUserCalendar)
    {
        $this->showEventDetailsMultiUserCalendar = $showEventDetailsMultiUserCalendar;
    }

    public function setShowHomePageHoverLinksForEvents(bool $showHomePageHoverLinksForEvents)
    {
        $this->showHomePageHoverLinksForEvents = $showHomePageHoverLinksForEvents;
    }

    public function setShowMyTasksHoverLinks(bool $showMyTasksHoverLinks)
    {
        $this->showMyTasksHoverLinks = $showMyTasksHoverLinks;
    }
}

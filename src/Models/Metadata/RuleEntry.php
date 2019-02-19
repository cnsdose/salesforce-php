<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class RuleEntry
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $assignedTo
 * @property string|null $assignedToType
 * @property string|null $booleanFilter
 * @property string|null $businessHours
 * @property string|null $businessHoursSource
 * @property FilterItem[]|null $criteriaItems
 * @property bool|null $disableEscalationWhenModified
 * @property EscalationAction[]|null $escalationAction
 * @property string|null $escalationStartTime
 * @property string|null $formula
 * @property bool|null $notifyCcRecipients
 * @property bool|null $overrideExistingTeams
 * @property string|null $replyToEmail
 * @property string|null $senderEmail
 * @property string|null $senderName
 * @property string[]|null $team
 * @property string|null $template
 */
class RuleEntry
{
    public static $classMap = [
        'criteriaItems' => [
            'multiple' => true,
            'type' => FilterItem::class,
        ],
        'escalationAction' => [
            'multiple' => true,
            'type' => EscalationAction::class,
        ],
    ];

    public function setAssignedTo(string $assignedTo)
    {
        $this->assignedTo = $assignedTo;
    }

    public function setAssignedToType(AssignToLookupValueType $assignedToType)
    {
        $this->assignedToType = $assignedToType->getValue();
    }

    public function setBooleanFilter(string $booleanFilter)
    {
        $this->booleanFilter = $booleanFilter;
    }

    public function setBusinessHours(string $businessHours)
    {
        $this->businessHours = $businessHours;
    }

    public function setBusinessHoursSource(BusinessHoursSourceType $businessHoursSource)
    {
        $this->businessHoursSource = $businessHoursSource->getValue();
    }

    public function setCriteriaItems(array $criteriaItems)
    {
        $this->criteriaItems = $criteriaItems;
    }

    public function setDisableEscalationWhenModified(bool $disableEscalationWhenModified)
    {
        $this->disableEscalationWhenModified = $disableEscalationWhenModified;
    }

    public function setEscalationAction(array $escalationAction)
    {
        $this->escalationAction = $escalationAction;
    }

    public function setEscalationStartTime(EscalationStartTimeType $escalationStartTime)
    {
        $this->escalationStartTime = $escalationStartTime->getValue();
    }

    public function setFormula(string $formula)
    {
        $this->formula = $formula;
    }

    public function setNotifyCcRecipients(bool $notifyCcRecipients)
    {
        $this->notifyCcRecipients = $notifyCcRecipients;
    }

    public function setOverrideExistingTeams(bool $overrideExistingTeams)
    {
        $this->overrideExistingTeams = $overrideExistingTeams;
    }

    public function setReplyToEmail(string $replyToEmail)
    {
        $this->replyToEmail = $replyToEmail;
    }

    public function setSenderEmail(string $senderEmail)
    {
        $this->senderEmail = $senderEmail;
    }

    public function setSenderName(string $senderName)
    {
        $this->senderName = $senderName;
    }

    public function setTeam(array $team)
    {
        $this->team = $team;
    }

    public function setTemplate(string $template)
    {
        $this->template = $template;
    }
}

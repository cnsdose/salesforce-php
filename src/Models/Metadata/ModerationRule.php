<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ModerationRule
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $action
 * @property int|null $actionLimit
 * @property bool|null $active
 * @property string|null $description
 * @property ModeratedEntityField[]|null $entitiesAndFields
 * @property string|null $masterLabel
 * @property int|null $notifyLimit
 * @property string|null $timePeriod
 * @property string|null $type
 * @property string[]|null $userCriteria
 * @property string|null $userMessage
 */
class ModerationRule extends Metadata
{
    public static $classMap = [
        'entitiesAndFields' => [
            'multiple' => true,
            'type' => ModeratedEntityField::class,
        ],
    ];

    public function setAction(ModerationRuleAction $action)
    {
        $this->action = $action->getValue();
    }

    public function setActionLimit(int $actionLimit)
    {
        $this->actionLimit = $actionLimit;
    }

    public function setActive(bool $active)
    {
        $this->active = $active;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setEntitiesAndFields(array $entitiesAndFields)
    {
        $this->entitiesAndFields = $entitiesAndFields;
    }

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }

    public function setNotifyLimit(int $notifyLimit)
    {
        $this->notifyLimit = $notifyLimit;
    }

    public function setTimePeriod(RateLimitTimePeriod $timePeriod)
    {
        $this->timePeriod = $timePeriod->getValue();
    }

    public function setType(ModerationRuleType $type)
    {
        $this->type = $type->getValue();
    }

    public function setUserCriteria(array $userCriteria)
    {
        $this->userCriteria = $userCriteria;
    }

    public function setUserMessage(string $userMessage)
    {
        $this->userMessage = $userMessage;
    }
}

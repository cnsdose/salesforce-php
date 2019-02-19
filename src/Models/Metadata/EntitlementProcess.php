<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class EntitlementProcess
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $SObjectType
 * @property bool|null $active
 * @property string|null $businessHours
 * @property string|null $description
 * @property string|null $entryStartDateField
 * @property string|null $exitCriteriaBooleanFilter
 * @property FilterItem[]|null $exitCriteriaFilterItems
 * @property string|null $exitCriteriaFormula
 * @property bool|null $isRecordTypeApplied
 * @property bool|null $isVersionDefault
 * @property EntitlementProcessMilestoneItem[]|null $milestones
 * @property string|null $name
 * @property string|null $recordType
 * @property string|null $versionMaster
 * @property string|null $versionNotes
 * @property int|null $versionNumber
 */
class EntitlementProcess extends Metadata
{
    public static $classMap = [
        'exitCriteriaFilterItems' => [
            'multiple' => true,
            'type' => FilterItem::class,
        ],
        'milestones' => [
            'multiple' => true,
            'type' => EntitlementProcessMilestoneItem::class,
        ],
    ];

    public function setSObjectType(string $SObjectType)
    {
        $this->SObjectType = $SObjectType;
    }

    public function setActive(bool $active)
    {
        $this->active = $active;
    }

    public function setBusinessHours(string $businessHours)
    {
        $this->businessHours = $businessHours;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setEntryStartDateField(string $entryStartDateField)
    {
        $this->entryStartDateField = $entryStartDateField;
    }

    public function setExitCriteriaBooleanFilter(string $exitCriteriaBooleanFilter)
    {
        $this->exitCriteriaBooleanFilter = $exitCriteriaBooleanFilter;
    }

    public function setExitCriteriaFilterItems(array $exitCriteriaFilterItems)
    {
        $this->exitCriteriaFilterItems = $exitCriteriaFilterItems;
    }

    public function setExitCriteriaFormula(string $exitCriteriaFormula)
    {
        $this->exitCriteriaFormula = $exitCriteriaFormula;
    }

    public function setIsRecordTypeApplied(bool $isRecordTypeApplied)
    {
        $this->isRecordTypeApplied = $isRecordTypeApplied;
    }

    public function setIsVersionDefault(bool $isVersionDefault)
    {
        $this->isVersionDefault = $isVersionDefault;
    }

    public function setMilestones(array $milestones)
    {
        $this->milestones = $milestones;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setRecordType(string $recordType)
    {
        $this->recordType = $recordType;
    }

    public function setVersionMaster(string $versionMaster)
    {
        $this->versionMaster = $versionMaster;
    }

    public function setVersionNotes(string $versionNotes)
    {
        $this->versionNotes = $versionNotes;
    }

    public function setVersionNumber(int $versionNumber)
    {
        $this->versionNumber = $versionNumber;
    }
}

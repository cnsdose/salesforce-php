<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FieldServiceSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $capacityUsageCalcClassId
 * @property bool|null $doesAllowEditSaForCrew
 * @property bool|null $doesShareSaParentWoWithAr
 * @property bool|null $doesShareSaWithAr
 * @property bool|null $enableWorkOrders
 * @property bool|null $fieldServiceNotificationsOrgPref
 * @property bool|null $fieldServiceOrgPref
 * @property bool|null $isGeoCodeSyncEnabled
 * @property bool|null $isLocationHistoryEnabled
 * @property int|null $serviceAppointmentsDueDateOffsetOrgValue
 * @property string[]|null $workOrderLineItemSearchFields
 * @property string[]|null $workOrderSearchFields
 */
class FieldServiceSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setCapacityUsageCalcClassId(string $capacityUsageCalcClassId)
    {
        $this->capacityUsageCalcClassId = $capacityUsageCalcClassId;
    }

    public function setDoesAllowEditSaForCrew(bool $doesAllowEditSaForCrew)
    {
        $this->doesAllowEditSaForCrew = $doesAllowEditSaForCrew;
    }

    public function setDoesShareSaParentWoWithAr(bool $doesShareSaParentWoWithAr)
    {
        $this->doesShareSaParentWoWithAr = $doesShareSaParentWoWithAr;
    }

    public function setDoesShareSaWithAr(bool $doesShareSaWithAr)
    {
        $this->doesShareSaWithAr = $doesShareSaWithAr;
    }

    public function setEnableWorkOrders(bool $enableWorkOrders)
    {
        $this->enableWorkOrders = $enableWorkOrders;
    }

    public function setFieldServiceNotificationsOrgPref(bool $fieldServiceNotificationsOrgPref)
    {
        $this->fieldServiceNotificationsOrgPref = $fieldServiceNotificationsOrgPref;
    }

    public function setFieldServiceOrgPref(bool $fieldServiceOrgPref)
    {
        $this->fieldServiceOrgPref = $fieldServiceOrgPref;
    }

    public function setIsGeoCodeSyncEnabled(bool $isGeoCodeSyncEnabled)
    {
        $this->isGeoCodeSyncEnabled = $isGeoCodeSyncEnabled;
    }

    public function setIsLocationHistoryEnabled(bool $isLocationHistoryEnabled)
    {
        $this->isLocationHistoryEnabled = $isLocationHistoryEnabled;
    }

    public function setServiceAppointmentsDueDateOffsetOrgValue(int $serviceAppointmentsDueDateOffsetOrgValue)
    {
        $this->serviceAppointmentsDueDateOffsetOrgValue = $serviceAppointmentsDueDateOffsetOrgValue;
    }

    public function setWorkOrderLineItemSearchFields(array $workOrderLineItemSearchFields)
    {
        $this->workOrderLineItemSearchFields = $workOrderLineItemSearchFields;
    }

    public function setWorkOrderSearchFields(array $workOrderSearchFields)
    {
        $this->workOrderSearchFields = $workOrderSearchFields;
    }
}

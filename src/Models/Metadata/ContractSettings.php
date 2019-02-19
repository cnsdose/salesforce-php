<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ContractSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $autoCalculateEndDate
 * @property string|null $autoExpirationDelay
 * @property string|null $autoExpirationRecipient
 * @property bool|null $autoExpireContracts
 * @property bool|null $enableContractHistoryTracking
 * @property bool|null $notifyOwnersOnContractExpiration
 */
class ContractSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setAutoCalculateEndDate(bool $autoCalculateEndDate)
    {
        $this->autoCalculateEndDate = $autoCalculateEndDate;
    }

    public function setAutoExpirationDelay(string $autoExpirationDelay)
    {
        $this->autoExpirationDelay = $autoExpirationDelay;
    }

    public function setAutoExpirationRecipient(string $autoExpirationRecipient)
    {
        $this->autoExpirationRecipient = $autoExpirationRecipient;
    }

    public function setAutoExpireContracts(bool $autoExpireContracts)
    {
        $this->autoExpireContracts = $autoExpireContracts;
    }

    public function setEnableContractHistoryTracking(bool $enableContractHistoryTracking)
    {
        $this->enableContractHistoryTracking = $enableContractHistoryTracking;
    }

    public function setNotifyOwnersOnContractExpiration(bool $notifyOwnersOnContractExpiration)
    {
        $this->notifyOwnersOnContractExpiration = $notifyOwnersOnContractExpiration;
    }
}

<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class EventSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableApexLimitEvents
 * @property bool|null $enableDeleteMonitoringData
 * @property bool|null $enableDynamicStreamingChannel
 * @property bool|null $enableEventLogWaveIntegration
 * @property bool|null $enableLoginForensics
 * @property bool|null $enableStreamingApi
 * @property bool|null $enableTerminateOldestSession
 * @property bool|null $enableTransactionSecurityPolicies
 */
class EventSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEnableApexLimitEvents(bool $enableApexLimitEvents)
    {
        $this->enableApexLimitEvents = $enableApexLimitEvents;
    }

    public function setEnableDeleteMonitoringData(bool $enableDeleteMonitoringData)
    {
        $this->enableDeleteMonitoringData = $enableDeleteMonitoringData;
    }

    public function setEnableDynamicStreamingChannel(bool $enableDynamicStreamingChannel)
    {
        $this->enableDynamicStreamingChannel = $enableDynamicStreamingChannel;
    }

    public function setEnableEventLogWaveIntegration(bool $enableEventLogWaveIntegration)
    {
        $this->enableEventLogWaveIntegration = $enableEventLogWaveIntegration;
    }

    public function setEnableLoginForensics(bool $enableLoginForensics)
    {
        $this->enableLoginForensics = $enableLoginForensics;
    }

    public function setEnableStreamingApi(bool $enableStreamingApi)
    {
        $this->enableStreamingApi = $enableStreamingApi;
    }

    public function setEnableTerminateOldestSession(bool $enableTerminateOldestSession)
    {
        $this->enableTerminateOldestSession = $enableTerminateOldestSession;
    }

    public function setEnableTransactionSecurityPolicies(bool $enableTransactionSecurityPolicies)
    {
        $this->enableTransactionSecurityPolicies = $enableTransactionSecurityPolicies;
    }
}

<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class EmailToCaseSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableE2CSourceTracking
 * @property bool|null $enableEmailToCase
 * @property bool|null $enableHtmlEmail
 * @property bool|null $enableOnDemandEmailToCase
 * @property bool|null $enableThreadIDInBody
 * @property bool|null $enableThreadIDInSubject
 * @property bool|null $notifyOwnerOnNewCaseEmail
 * @property string|null $overEmailLimitAction
 * @property bool|null $preQuoteSignature
 * @property EmailToCaseRoutingAddress[]|null $routingAddresses
 * @property string|null $unauthorizedSenderAction
 */
class EmailToCaseSettings
{
    public static $classMap = [
        'routingAddresses' => [
            'multiple' => true,
            'type' => EmailToCaseRoutingAddress::class,
        ],
    ];

    public function setEnableE2CSourceTracking(bool $enableE2CSourceTracking)
    {
        $this->enableE2CSourceTracking = $enableE2CSourceTracking;
    }

    public function setEnableEmailToCase(bool $enableEmailToCase)
    {
        $this->enableEmailToCase = $enableEmailToCase;
    }

    public function setEnableHtmlEmail(bool $enableHtmlEmail)
    {
        $this->enableHtmlEmail = $enableHtmlEmail;
    }

    public function setEnableOnDemandEmailToCase(bool $enableOnDemandEmailToCase)
    {
        $this->enableOnDemandEmailToCase = $enableOnDemandEmailToCase;
    }

    public function setEnableThreadIDInBody(bool $enableThreadIDInBody)
    {
        $this->enableThreadIDInBody = $enableThreadIDInBody;
    }

    public function setEnableThreadIDInSubject(bool $enableThreadIDInSubject)
    {
        $this->enableThreadIDInSubject = $enableThreadIDInSubject;
    }

    public function setNotifyOwnerOnNewCaseEmail(bool $notifyOwnerOnNewCaseEmail)
    {
        $this->notifyOwnerOnNewCaseEmail = $notifyOwnerOnNewCaseEmail;
    }

    public function setOverEmailLimitAction(EmailToCaseOnFailureActionType $overEmailLimitAction)
    {
        $this->overEmailLimitAction = $overEmailLimitAction->getValue();
    }

    public function setPreQuoteSignature(bool $preQuoteSignature)
    {
        $this->preQuoteSignature = $preQuoteSignature;
    }

    public function setRoutingAddresses(array $routingAddresses)
    {
        $this->routingAddresses = $routingAddresses;
    }

    public function setUnauthorizedSenderAction(EmailToCaseOnFailureActionType $unauthorizedSenderAction)
    {
        $this->unauthorizedSenderAction = $unauthorizedSenderAction->getValue();
    }
}

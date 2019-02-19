<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class EmailServicesFunction
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $apexClass
 * @property string|null $attachmentOption
 * @property string|null $authenticationFailureAction
 * @property string|null $authorizationFailureAction
 * @property string|null $authorizedSenders
 * @property EmailServicesAddress[]|null $emailServicesAddresses
 * @property string|null $errorRoutingAddress
 * @property string|null $functionInactiveAction
 * @property string|null $functionName
 * @property bool|null $isActive
 * @property bool|null $isAuthenticationRequired
 * @property bool|null $isErrorRoutingEnabled
 * @property bool|null $isTextAttachmentsAsBinary
 * @property bool|null $isTlsRequired
 * @property string|null $overLimitAction
 */
class EmailServicesFunction extends Metadata
{
    public static $classMap = [
        'emailServicesAddresses' => [
            'multiple' => true,
            'type' => EmailServicesAddress::class,
        ],
    ];

    public function setApexClass(string $apexClass)
    {
        $this->apexClass = $apexClass;
    }

    public function setAttachmentOption(EmailServicesAttOptions $attachmentOption)
    {
        $this->attachmentOption = $attachmentOption->getValue();
    }

    public function setAuthenticationFailureAction(EmailServicesErrorAction $authenticationFailureAction)
    {
        $this->authenticationFailureAction = $authenticationFailureAction->getValue();
    }

    public function setAuthorizationFailureAction(EmailServicesErrorAction $authorizationFailureAction)
    {
        $this->authorizationFailureAction = $authorizationFailureAction->getValue();
    }

    public function setAuthorizedSenders(string $authorizedSenders)
    {
        $this->authorizedSenders = $authorizedSenders;
    }

    public function setEmailServicesAddresses(array $emailServicesAddresses)
    {
        $this->emailServicesAddresses = $emailServicesAddresses;
    }

    public function setErrorRoutingAddress(string $errorRoutingAddress)
    {
        $this->errorRoutingAddress = $errorRoutingAddress;
    }

    public function setFunctionInactiveAction(EmailServicesErrorAction $functionInactiveAction)
    {
        $this->functionInactiveAction = $functionInactiveAction->getValue();
    }

    public function setFunctionName(string $functionName)
    {
        $this->functionName = $functionName;
    }

    public function setIsActive(bool $isActive)
    {
        $this->isActive = $isActive;
    }

    public function setIsAuthenticationRequired(bool $isAuthenticationRequired)
    {
        $this->isAuthenticationRequired = $isAuthenticationRequired;
    }

    public function setIsErrorRoutingEnabled(bool $isErrorRoutingEnabled)
    {
        $this->isErrorRoutingEnabled = $isErrorRoutingEnabled;
    }

    public function setIsTextAttachmentsAsBinary(bool $isTextAttachmentsAsBinary)
    {
        $this->isTextAttachmentsAsBinary = $isTextAttachmentsAsBinary;
    }

    public function setIsTlsRequired(bool $isTlsRequired)
    {
        $this->isTlsRequired = $isTlsRequired;
    }

    public function setOverLimitAction(EmailServicesErrorAction $overLimitAction)
    {
        $this->overLimitAction = $overLimitAction->getValue();
    }
}

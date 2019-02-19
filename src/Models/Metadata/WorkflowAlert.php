<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class WorkflowAlert
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string[]|null $ccEmails
 * @property string|null $description
 * @property bool|null $protected
 * @property WorkflowEmailRecipient[]|null $recipients
 * @property string|null $senderAddress
 * @property string|null $senderType
 * @property string|null $template
 */
class WorkflowAlert extends WorkflowAction
{
    public static $classMap = [
        'recipients' => [
            'multiple' => true,
            'type' => WorkflowEmailRecipient::class,
        ],
    ];

    public function setCcEmails(array $ccEmails)
    {
        $this->ccEmails = $ccEmails;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setProtected(bool $protected)
    {
        $this->protected = $protected;
    }

    public function setRecipients(array $recipients)
    {
        $this->recipients = $recipients;
    }

    public function setSenderAddress(string $senderAddress)
    {
        $this->senderAddress = $senderAddress;
    }

    public function setSenderType(ActionEmailSenderType $senderType)
    {
        $this->senderType = $senderType->getValue();
    }

    public function setTemplate(string $template)
    {
        $this->template = $template;
    }
}

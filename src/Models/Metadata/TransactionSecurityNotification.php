<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class TransactionSecurityNotification
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $inApp
 * @property bool|null $sendEmail
 * @property string|null $user
 */
class TransactionSecurityNotification
{
    public static $classMap = [
    ];

    public function setInApp(bool $inApp)
    {
        $this->inApp = $inApp;
    }

    public function setSendEmail(bool $sendEmail)
    {
        $this->sendEmail = $sendEmail;
    }

    public function setUser(string $user)
    {
        $this->user = $user;
    }
}

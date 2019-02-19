<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class TransactionSecurityAction
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $block
 * @property bool|null $endSession
 * @property bool|null $freezeUser
 * @property TransactionSecurityNotification[]|null $notifications
 * @property bool|null $twoFactorAuthentication
 */
class TransactionSecurityAction
{
    public static $classMap = [
        'notifications' => [
            'multiple' => true,
            'type' => TransactionSecurityNotification::class,
        ],
    ];

    public function setBlock(bool $block)
    {
        $this->block = $block;
    }

    public function setEndSession(bool $endSession)
    {
        $this->endSession = $endSession;
    }

    public function setFreezeUser(bool $freezeUser)
    {
        $this->freezeUser = $freezeUser;
    }

    public function setNotifications(array $notifications)
    {
        $this->notifications = $notifications;
    }

    public function setTwoFactorAuthentication(bool $twoFactorAuthentication)
    {
        $this->twoFactorAuthentication = $twoFactorAuthentication;
    }
}

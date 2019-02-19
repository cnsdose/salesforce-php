<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class Queue
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $doesSendEmailToMembers
 * @property string|null $email
 * @property string|null $name
 * @property QueueMembers|null $queueMembers
 * @property string|null $queueRoutingConfig
 * @property QueueSobject[]|null $queueSobject
 */
class Queue extends Metadata
{
    public static $classMap = [
        'queueMembers' => [
            'multiple' => false,
            'type' => QueueMembers::class,
        ],
        'queueSobject' => [
            'multiple' => true,
            'type' => QueueSobject::class,
        ],
    ];

    public function setDoesSendEmailToMembers(bool $doesSendEmailToMembers)
    {
        $this->doesSendEmailToMembers = $doesSendEmailToMembers;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setQueueMembers(QueueMembers $queueMembers)
    {
        $this->queueMembers = $queueMembers;
    }

    public function setQueueRoutingConfig(string $queueRoutingConfig)
    {
        $this->queueRoutingConfig = $queueRoutingConfig;
    }

    public function setQueueSobject(array $queueSobject)
    {
        $this->queueSobject = $queueSobject;
    }
}

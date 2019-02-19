<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class RetrieveResult
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $done
 * @property string|null $errorMessage
 * @property string|null $errorStatusCode
 * @property FileProperties[]|null $fileProperties
 * @property string|null $id
 * @property RetrieveMessage[]|null $messages
 * @property string|null $status
 * @property bool|null $success
 * @property string|null $zipFile
 */
class RetrieveResult
{
    public static $classMap = [
        'fileProperties' => [
            'multiple' => true,
            'type' => FileProperties::class,
        ],
        'messages' => [
            'multiple' => true,
            'type' => RetrieveMessage::class,
        ],
    ];

    public function setDone(bool $done)
    {
        $this->done = $done;
    }

    public function setErrorMessage(string $errorMessage)
    {
        $this->errorMessage = $errorMessage;
    }

    public function setErrorStatusCode(StatusCode $errorStatusCode)
    {
        $this->errorStatusCode = $errorStatusCode->getValue();
    }

    public function setFileProperties(array $fileProperties)
    {
        $this->fileProperties = $fileProperties;
    }

    public function setId(string $id)
    {
        $this->id = $id;
    }

    public function setMessages(array $messages)
    {
        $this->messages = $messages;
    }

    public function setStatus(RetrieveStatus $status)
    {
        $this->status = $status->getValue();
    }

    public function setSuccess(bool $success)
    {
        $this->success = $success;
    }

    public function setZipFile(string $zipFile)
    {
        $this->zipFile = $zipFile;
    }
}

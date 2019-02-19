<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class AsyncResult
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $done
 * @property ID|null $id
 * @property string|null $message
 * @property string|null $state
 * @property string|null $statusCode
 */
class AsyncResult
{
    public static $classMap = [
    ];

    public function setDone(bool $done)
    {
        $this->done = $done;
    }

    public function setId(ID $id)
    {
        $this->id = $id;
    }

    public function setMessage(string $message)
    {
        $this->message = $message;
    }

    public function setState(AsyncRequestState $state)
    {
        $this->state = $state->getValue();
    }

    public function setStatusCode(StatusCode $statusCode)
    {
        $this->statusCode = $statusCode->getValue();
    }
}

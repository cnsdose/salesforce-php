<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 7/02/19
 * Time: 3:17 PM
 */

namespace CNSDose\Salesforce\Exceptions;

class MalformedRequestException extends StandardException
{
    /**
     * QueryException constructor.
     * @param $message
     * @param $errorCode
     */
    public function __construct($message, $errorCode)
    {
        parent::__construct($message);
        $this->addError($errorCode, $message);
    }
}

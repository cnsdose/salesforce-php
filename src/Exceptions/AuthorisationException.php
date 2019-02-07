<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 7/02/19
 * Time: 3:22 PM
 */

namespace CNSDose\Salesforce\Exceptions;

use CNSDose\Standards\Exceptions\StandardException;

class AuthorisationException extends StandardException
{
    /**
     * QueryException constructor.
     * @param $message
     * @param $errorCode
     */
    public function __construct($message, $errorCode)
    {
        parent::__construct(500, $message);
        $this->addError($errorCode, $message);
    }
}

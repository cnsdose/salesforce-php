<?php
/**
 * Created by PhpStorm.
 * User: frederick
 * Date: 17/05/18
 * Time: 3:16 AM
 */

namespace CNSDose\Salesforce\Exceptions;

class BaseException extends \Exception
{
    protected $errorBag = [];

    /**
     * @param string $title
     * @param string $detail
     */
    public function addError(string $title, string $detail)
    {
        $this->errorBag[] = [
            'title' => $title,
            'detail' => $detail,
        ];
    }

    /**
     * @return array
     */
    public function &getErrorBag()
    {
        return $this->errorBag;
    }
}

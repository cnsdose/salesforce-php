<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 7/02/19
 * Time: 5:05 PM
 */

namespace CNSDose\Salesforce\Support\Conversion;

class Boolean extends BaseConversion
{
    protected function doDecode($value)
    {
        return (bool)$value;
    }

    protected function doEncode($value)
    {
        return (bool)$value;
    }
}

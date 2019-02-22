<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 2019-02-22
 * Time: 16:58
 */

namespace CNSDose\Salesforce\Support\Conversion;

use CNSDose\Salesforce\Exceptions\ConversionException;

class MultiSelectPicklist extends BaseConversion
{
    /**
     * @param $value
     * @return string[]
     */
    protected function doDecode($value)
    {
        return explode(';', $value);
    }

    /**
     * @param $value
     * @return string|string[]
     * @throws ConversionException
     */
    protected function doEncode($value)
    {
        if (is_string($value)) {
            return $value;
        }
        if (is_array($value)) {
            $value = array_map(function ($item) {
                return (string)$item;
            }, $value);
            foreach ($value as $item) {
                if (strpos($item, ';') !== false) {
                    throw new ConversionException(500, 'Multi-select picklist values cannot contain semicolon.');
                }
            }
            return implode(';', $value);
        }
        throw new ConversionException(500, sprintf('Cannot encode %s for multi-select picklist.', gettype($value)));
    }
}

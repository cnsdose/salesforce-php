<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 7/02/19
 * Time: 2:40 PM
 */

namespace CNSDose\Salesforce\Support\Conversion;

use Carbon\Carbon;
use CNSDose\Salesforce\Exceptions\ConversionException;

/**
 * Class Date
 * @package CNSDose\Salesforce\Support\Conversion
 *
 * Salesforce stores does not store timezone info for this type
 */
class Date extends BaseConversion
{
    private static $format = 'Y-m-d';

    /**
     * @param string $value
     * @return Carbon
     * @throws ConversionException
     */
    public function doDecode($value)
    {
        try {
            return Carbon::createFromFormat(self::$format, $value);
        } catch (\Exception $e) {
            throw new ConversionException(500, sprintf('Failed to decode %s.', $value), 0, $e);
        }
    }

    /**
     * @param Carbon $value
     * @return string
     */
    public function doEncode($value)
    {
        return $value->setTimezone('UTC')->format(self::$format);
    }
}

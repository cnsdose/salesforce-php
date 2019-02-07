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
 * Class DateTime
 * @package CNSDose\Salesforce\Support\Conversion
 *
 * Salesforce does not store the original timezone
 * Date retrieved from Salesforce is always in UTC
 */
class DateTime extends BaseConversion
{
    private static $format = 'Y-m-d\\TH:i:s.vO';

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

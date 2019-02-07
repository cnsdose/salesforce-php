<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 7/02/19
 * Time: 11:48 AM
 */

namespace CNSDose\Salesforce\Support\Conversion;

use CNSDose\Salesforce\Exceptions\ConversionException;

/**
 * Class Number
 * @package CNSDose\Salesforce\Support\Conversion
 *
 * Coerce number of digits to the left/right of the decimal point
 * This is usually unnecessary as Salesforce API stores the data as it is as long as it's within their range limit
 */
class Number extends BaseConversion
{
    private $length, $decimalPlaces;

    /**
     * Number constructor.
     * @param int $length
     * @param int $decimalPlaces
     */
    public function __construct(int $length = 18, int $decimalPlaces = 0)
    {
        $this->length = $length;
        $this->decimalPlaces = $decimalPlaces;
    }

    public function doDecode($value): float
    {
        return (float)sprintf(sprintf('%%0.%df', $this->decimalPlaces), $value);
    }

    public function doEncode($value): float
    {
        if ((int)log10($value) + 1 > $this->length) {
            throw new ConversionException(500, sprintf('Failed to encode %s.', $value));
        }
        return (float)sprintf(sprintf('%%0.%df', $this->decimalPlaces), $value);
    }
}

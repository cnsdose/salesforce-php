<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 7/02/19
 * Time: 11:47 AM
 */

namespace CNSDose\Salesforce\Support\Conversion;

use CNSDose\Salesforce\Exceptions\ConversionException;

abstract class BaseConversion
{
    private static $conversions = [
        'number' => Number::class,
        'currency' => Number::class,
        'date' => Date::class,
        'time' => Time::class,
        'datetime' => DateTime::class,
        'bool' => Boolean::class,
        'boolean' => Boolean::class,
    ];

    /**
     * @param string $rule
     * @return array
     */
    protected static function parseRule(string $rule): array
    {
        if (strpos($rule, ':') === false) {
            [$name, $args] = [$rule, ''];
        } else {
            [$name, $args] = explode(':', $rule);
        }
        if (empty($args)) {
            $args = [];
        } else {
            $args = explode(',', $args);
        }
        return [
            $name,
            self::$conversions[$name],
            $args,
        ];
    }

    public static function registerRule(string $name, string $class)
    {
        self::$conversions[$name] = $class;
    }

    /**
     * @param string $rule
     * @param $value
     * @return mixed
     * @throws ConversionException
     */
    public static function decode(string $rule, $value)
    {
        [, $class, $args] = self::parseRule($rule);
        /**
         * @var BaseConversion|mixed $conversion
         */
        $conversion = new $class(...$args);
        return $conversion->doDecode($value);
    }

    /**
     * @param string $rule
     * @param $value
     * @return mixed
     * @throws ConversionException
     */
    public static function encode(string $rule, $value)
    {
        [, $class, $args] = self::parseRule($rule);
        /**
         * @var BaseConversion|mixed $conversion
         */
        $conversion = new $class(...$args);
        return $conversion->doEncode($value);
    }

    /**
     * @param $value
     * @return mixed
     * @throws ConversionException
     */
    abstract protected function doDecode($value);

    /**
     * @param $value
     * @return mixed
     * @throws ConversionException
     */
    abstract protected function doEncode($value);
}

<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CurrencySettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableCurrencyEffectiveDates
 * @property bool|null $enableCurrencySymbolWithMultiCurrency
 * @property bool|null $enableMultiCurrency
 * @property bool|null $isMultiCurrencyActivationAllowed
 * @property bool|null $isParenCurrencyConvDisabled
 */
class CurrencySettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEnableCurrencyEffectiveDates(bool $enableCurrencyEffectiveDates)
    {
        $this->enableCurrencyEffectiveDates = $enableCurrencyEffectiveDates;
    }

    public function setEnableCurrencySymbolWithMultiCurrency(bool $enableCurrencySymbolWithMultiCurrency)
    {
        $this->enableCurrencySymbolWithMultiCurrency = $enableCurrencySymbolWithMultiCurrency;
    }

    public function setEnableMultiCurrency(bool $enableMultiCurrency)
    {
        $this->enableMultiCurrency = $enableMultiCurrency;
    }

    public function setIsMultiCurrencyActivationAllowed(bool $isMultiCurrencyActivationAllowed)
    {
        $this->isMultiCurrencyActivationAllowed = $isMultiCurrencyActivationAllowed;
    }

    public function setIsParenCurrencyConvDisabled(bool $isParenCurrencyConvDisabled)
    {
        $this->isParenCurrencyConvDisabled = $isParenCurrencyConvDisabled;
    }
}

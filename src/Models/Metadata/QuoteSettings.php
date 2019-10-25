<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class QuoteSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableQuote
 * @property bool|null $enableQuotesWithoutOppEnabled
 */
class QuoteSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEnableQuote(bool $enableQuote)
    {
        $this->enableQuote = $enableQuote;
    }

    public function setEnableQuotesWithoutOppEnabled(bool $enableQuotesWithoutOppEnabled)
    {
        $this->enableQuotesWithoutOppEnabled = $enableQuotesWithoutOppEnabled;
    }
}

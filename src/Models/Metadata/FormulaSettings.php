<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FormulaSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableDSTAwareDatevalue
 */
class FormulaSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEnableDSTAwareDatevalue(bool $enableDSTAwareDatevalue)
    {
        $this->enableDSTAwareDatevalue = $enableDSTAwareDatevalue;
    }
}

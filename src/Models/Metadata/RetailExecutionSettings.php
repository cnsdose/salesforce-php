<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class RetailExecutionSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableRetailExecution
 */
class RetailExecutionSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEnableRetailExecution(bool $enableRetailExecution)
    {
        $this->enableRetailExecution = $enableRetailExecution;
    }
}

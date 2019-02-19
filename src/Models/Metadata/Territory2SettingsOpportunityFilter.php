<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class Territory2SettingsOpportunityFilter
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $apexClassName
 * @property bool|null $enableFilter
 * @property bool|null $runOnCreate
 */
class Territory2SettingsOpportunityFilter
{
    public static $classMap = [
    ];

    public function setApexClassName(string $apexClassName)
    {
        $this->apexClassName = $apexClassName;
    }

    public function setEnableFilter(bool $enableFilter)
    {
        $this->enableFilter = $enableFilter;
    }

    public function setRunOnCreate(bool $runOnCreate)
    {
        $this->runOnCreate = $runOnCreate;
    }
}

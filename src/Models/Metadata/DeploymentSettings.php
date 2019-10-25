<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class DeploymentSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $doesSkipAsyncApexValidation
 */
class DeploymentSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setDoesSkipAsyncApexValidation(bool $doesSkipAsyncApexValidation)
    {
        $this->doesSkipAsyncApexValidation = $doesSkipAsyncApexValidation;
    }
}

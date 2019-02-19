<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ProfileExternalDataSourceAccess
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enabled
 * @property string|null $externalDataSource
 */
class ProfileExternalDataSourceAccess
{
    public static $classMap = [
    ];

    public function setEnabled(bool $enabled)
    {
        $this->enabled = $enabled;
    }

    public function setExternalDataSource(string $externalDataSource)
    {
        $this->externalDataSource = $externalDataSource;
    }
}

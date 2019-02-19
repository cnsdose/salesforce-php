<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class PermissionSetExternalDataSourceAccess
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enabled
 * @property string|null $externalDataSource
 */
class PermissionSetExternalDataSourceAccess
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

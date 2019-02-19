<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ProfileApexPageAccess
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $apexPage
 * @property bool|null $enabled
 */
class ProfileApexPageAccess
{
    public static $classMap = [
    ];

    public function setApexPage(string $apexPage)
    {
        $this->apexPage = $apexPage;
    }

    public function setEnabled(bool $enabled)
    {
        $this->enabled = $enabled;
    }
}

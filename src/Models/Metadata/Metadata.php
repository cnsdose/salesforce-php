<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class Metadata
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $fullName
 */
class Metadata extends \CNSDose\Salesforce\Models\BaseMetadataModel
{
    public static $classMap = [
    ];

    public function setFullName(string $fullName)
    {
        $this->fullName = $fullName;
    }
}

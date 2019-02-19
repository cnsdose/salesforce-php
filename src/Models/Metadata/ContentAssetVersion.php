<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ContentAssetVersion
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $number
 * @property string|null $pathOnClient
 * @property string|null $zipEntry
 */
class ContentAssetVersion
{
    public static $classMap = [
    ];

    public function setNumber(string $number)
    {
        $this->number = $number;
    }

    public function setPathOnClient(string $pathOnClient)
    {
        $this->pathOnClient = $pathOnClient;
    }

    public function setZipEntry(string $zipEntry)
    {
        $this->zipEntry = $zipEntry;
    }
}

<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class TrailheadSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableMyTrailheadPref
 */
class TrailheadSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEnableMyTrailheadPref(bool $enableMyTrailheadPref)
    {
        $this->enableMyTrailheadPref = $enableMyTrailheadPref;
    }
}

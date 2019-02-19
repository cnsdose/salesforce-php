<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class SiteDotCom
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $label
 * @property string|null $siteType
 */
class SiteDotCom extends MetadataWithContent
{
    public static $classMap = [
    ];

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setSiteType(SiteType $siteType)
    {
        $this->siteType = $siteType->getValue();
    }
}

<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class RelatedList
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $hideOnDetail
 * @property string|null $name
 */
class RelatedList
{
    public static $classMap = [
    ];

    public function setHideOnDetail(bool $hideOnDetail)
    {
        $this->hideOnDetail = $hideOnDetail;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }
}

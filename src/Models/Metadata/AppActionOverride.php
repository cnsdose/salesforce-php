<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class AppActionOverride
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $pageOrSobjectType
 */
class AppActionOverride extends ActionOverride
{
    public static $classMap = [
    ];

    public function setPageOrSobjectType(string $pageOrSobjectType)
    {
        $this->pageOrSobjectType = $pageOrSobjectType;
    }
}

<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class PersonListSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enablePersonList
 */
class PersonListSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEnablePersonList(bool $enablePersonList)
    {
        $this->enablePersonList = $enablePersonList;
    }
}

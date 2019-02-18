<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 15/02/19
 * Time: 4:06 PM
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class SharingReason
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $fullName
 * @property string|null $label
 */
class SharingReason
{
    public function setFullName(string $fullName)
    {
        $this->fullName = $fullName;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }
}

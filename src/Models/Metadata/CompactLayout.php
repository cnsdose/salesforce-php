<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 15/02/19
 * Time: 2:58 PM
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CompactLayout
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $fullName
 * @property string|null $fields
 * @property string|null $label
 */
class CompactLayout
{
    public function setFullName(string $fullName)
    {
        $this->fullName = $fullName;
    }

    public function setFields(string $fields)
    {
        $this->fields = $fields;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }
}

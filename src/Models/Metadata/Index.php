<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 15/02/19
 * Time: 4:27 PM
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class Index
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $fullName
 * @property IndexField[]|null $fields
 * @property string|null $label
 */
class Index
{
    public function setFullName(string $fullName)
    {
        $this->fullName = $fullName;
    }

    public function setFields(array $fields)
    {
        $this->fields = $fields;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }
}

<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 15/02/19
 * Time: 3:51 PM
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ListViewFilter
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $field
 * @property string|null $operation
 * @property string|null $value
 */
class ListViewFilter
{
    public function setField(string $field)
    {
        $this->field = $field;
    }

    public function setOperation(FilterOperation $operation)
    {
        $this->operation = $operation->getValue();
    }

    public function setValue(string $value)
    {
        $this->value = $value;
    }
}

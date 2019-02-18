<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 15/02/19
 * Time: 3:15 PM
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FilterItem
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $field
 * @property string|null $operation
 * @property string|null $value
 * @property string|null $valueField
 */
class FilterItem
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

    public function setValueField(string $valueField)
    {
        $this->valueField = $valueField;
    }
}

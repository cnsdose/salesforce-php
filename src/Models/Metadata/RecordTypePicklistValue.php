<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 15/02/19
 * Time: 4:00 PM
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class RecordTypePicklistValue
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $picklist
 * @property PicklistValue[]|null $values
 */
class RecordTypePicklistValue
{
    public function setPicklist(string $picklist)
    {
        $this->picklist = $picklist;
    }

    public function setValues(array $values)
    {
        $this->values = $values;
    }
}

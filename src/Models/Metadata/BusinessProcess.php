<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 15/02/19
 * Time: 2:57 PM
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class BusinessProcess
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $fullName
 * @property string|null $description
 * @property bool|null $isActive
 * @property PicklistValue[]|null $values
 */
class BusinessProcess
{
    public function setFullName(string $fullName)
    {
        $this->fullName = $fullName;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setIsActive(bool $isActive)
    {
        $this->isActive = $isActive;
    }

    public function setValues(array $values)
    {
        $this->values = $values;
    }
}
